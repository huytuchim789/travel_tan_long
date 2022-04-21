<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\Guide;
use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('can:tour_guide');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourguides = Guide::all();
        return view('admin.tourGuide.tourGuide', compact('tourguides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tourGuide.create');
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
            'name' => 'required',
            'age' => 'required',
            'image' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }
        $tourGuide = new Guide;
        $tourGuide->image = $imageName;
        $tourGuide->name = $request->name;
        $tourGuide->age = $request->age;
        $tourGuide->status = $request->status;
        $tourGuide->save();
        return redirect()->route('tour-guide.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tourGuide = Guide::where('id', $id)->first();
        return view('admin.tourGuide.edit', compact('tourGuide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'age' => 'required',
        ]);

        $tourGuide = Guide::find($id);
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
            $tourGuide->image = $imageName;
        }
        
        $tourGuide->name = $request->name;
        $tourGuide->age = $request->age;
        $tourGuide->status = $request->status;
        $tourGuide->save();
        return redirect()->route('tour-guide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tourGuide = Guide::find($id);
        $tourGuide->delete();
        return redirect()->route('tour-guide.index');
    }
}
