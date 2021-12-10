<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section5;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Section5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section5s = Section5::all();
        return view('admin.section5.index', compact('section5s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.section5.create');
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
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'title' => 'required',
            'desc' => 'required'          
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . 
        $request->image->extension();

        $request->image->move(public_path('images'),$newImageName);

        Section5::create([
            'image' => $newImageName,
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
        ]);
        
        return redirect('/section5')
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
        return view('admin.section5.edit')
        ->with('section5', Section5::where('id', $id)->first());
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
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'title' => 'required',
            'desc' => 'required'          
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . 
        $request->image->extension();

        $request->image->move(public_path('images'),$newImageName);

        Section5::where('id', $id)
        ->update([
            'image' => $newImageName,
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
        ]);
        
        return redirect('/section5')
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
        $section5 = Section5::find($id);
        $section5->delete();
        return redirect ('/section5');
    }
}
