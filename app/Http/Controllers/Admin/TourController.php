<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\Guide;
use App\Model\user\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::latest()->get();
        return view('admin.tour.tour', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->can('tours.create')) {
            $guides = Guide::where('status', 1)->get();
            return view('admin.tour.create', compact('guides'));
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'price'=>'required'
        ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }
        $tour = new Tour;
        $tour->image = $imageName;
        $tour->title = $request->title;
        if ($slug = $request->title) {
            function make_slug($string) {
                return preg_replace('/\s+/u', '-', trim($string, "?"));
            }
            $slug = make_slug($slug);
            $tour->slug = trim($slug, "-");
        }
        $tour->body = $request->body;
        $tour->posted_by = Auth::user()->name;
        $tour->status = $request->status;
        $tour->price=$request->price;
        $tour->save();
        $tour->guides()->sync($request->guides);

        return redirect()->route('tour.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\user\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\user\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->can('tours.update')) {
            $tour = Tour::where('id', $id)->first();
            $guides = Guide::where('status', 1)->get();
            return view('admin.tour.edit', compact('tour', 'guides'));
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\user\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        $tour = Tour::where('id', $id)->first();

        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
            $tour->image = $imageName;
        }
        
        $tour->title = $request->title;
        if ($slug = $request->title) {
            function make_slug($string) {
                return preg_replace('/\s+/u', '-', trim($string, "?"));
            }
            $slug = make_slug($slug);
            $tour->slug = trim($slug, "-");
        }
        $tour->body = $request->body;
        $tour->status = $request->status;
        $tour->guides()->sync($request->guides);
        $tour->save();
        

        return redirect()->route('tour.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\user\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->can('tours.delete')) {
            $tour = Tour::where('id', $id)->first();
            $tour->delete();
            return redirect()->route('tour.index');
        }
        return redirect()->back();
    }
}