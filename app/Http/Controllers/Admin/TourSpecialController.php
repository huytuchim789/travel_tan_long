<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\Guide;
use App\Model\user\TourSpecial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourSpecialController extends Controller
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
        $tours = TourSpecial::latest()->get();
        return view('admin.tourSpecial.tourSpecial', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->can('tourSpecials.create')) {
            $guides = Guide::where('status', 1)->get();
            return view('admin.tourSpecial.create', compact('guides'));
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
            'image' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }
        $tourSpecial = new TourSpecial;
        $tourSpecial->image = $imageName;
        $tourSpecial->title = $request->title;
        if ($slug = $request->title) {
            function make_slug($string) {
                return preg_replace('/\s+/u', '-', trim($string, "?"));
            }
            $slug = make_slug($slug);
            $tourSpecial->slug = trim($slug, "-");
        }
        $tourSpecial->body = $request->body;
        $tourSpecial->posted_by = Auth::user()->name;
        $tourSpecial->status = $request->status;
        $tourSpecial->save();
        $tourSpecial->guides()->sync($request->guides);        

        return redirect()->route('tour-special.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\user\TourSpecial  $tourSpecial
     * @return \Illuminate\Http\Response
     */
    public function show(TourSpecial $tourSpecial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\user\TourSpecial  $tourSpecial
     * @return \Illuminate\Http\Response
     */
    public function edit(TourSpecial $tourSpecial)
    {
        if (Auth::user()->can('tourSpecials.update')) {
            $guides = Guide::all();
            return view('admin.tourSpecial.edit', compact('tourSpecial', 'guides'));
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\user\TourSpecial  $tourSpecial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TourSpecial $tourSpecial)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
            $tourSpecial->image = $imageName;
        }
        
        $tourSpecial->title = $request->title;
        if ($slug = $request->title) {
            function make_slug($string) {
                return preg_replace('/\s+/u', '-', trim($string, "?"));
            }
            $slug = make_slug($slug);
            $tourSpecial->slug = trim($slug, "-");
        }
        $tourSpecial->body = $request->body;
        $tourSpecial->status = $request->status;
        $tourSpecial->guides()->sync($request->guides);
        $tourSpecial->save();


        return redirect()->route('tour-special.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\user\TourSpecial  $tourSpecial
     * @return \Illuminate\Http\Response
     */
    public function destroy(TourSpecial $tourSpecial)
    {
        if (Auth::user()->can('tourSpecials.delete')) {
            $tourSpecial->delete();
            return redirect()->route('tour-special.index');
        }
        return redirect()->back();
    }
}
