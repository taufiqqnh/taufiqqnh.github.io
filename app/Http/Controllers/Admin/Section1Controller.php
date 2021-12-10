<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Section1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section1s = Section1::all();
        return view('admin.section1.index', compact('section1s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.section1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . 
        $request->image->extension();

        $request->image->move(public_path('images'),$newImageName);

        Section1::create([
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
            'image' => $newImageName,
        ]);
        
        return redirect('/section1')
            ->with('message', 'Your post has been added!');
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
        return view('admin.section1.edit')
            ->with('section1', Section1::where('id', $id)->first());
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
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . 
        $request->image->extension();

        $request->image->move(public_path('images'),$newImageName);

        Section1::where('id', $id)
        ->update([
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
            'image' => $newImageName,
        ]);
        
        return redirect('/section1')
            ->with('message', 'Your post has been added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section1 = Section1::find($id);
        $section1->delete();
        return redirect ('/section1');
    }
}
