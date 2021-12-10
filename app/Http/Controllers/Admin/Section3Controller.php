<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section3;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Section3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section3s = Section3::all();
        return view('admin.section3.index', compact('section3s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.section3.create');
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
            'full_name' => 'required',
            'position' => 'required',
            'desc' => 'required'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . 
        $request->image->extension();

        $request->image->move(public_path('images'),$newImageName);

        Section3::create([
            'image' => $newImageName,
            'full_name' => $request->input('full_name'),
            'position' => $request->input('position'),
            'desc' => $request->input('desc'),
            
        ]);
        
        return redirect('/section3')
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
        return view('admin.section3.edit')
            ->with('section3', Section3::where('id', $id)->first());
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
            'full_name' => 'required',
            'position' => 'required',
            'desc' => 'required'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . 
        $request->image->extension();

        $request->image->move(public_path('images'),$newImageName);

        Section3::where('id', $id)
        ->update([
            'image' => $newImageName,
            'full_name' => $request->input('full_name'),
            'position' => $request->input('position'),
            'desc' => $request->input('desc'),
            
        ]);
        
        return redirect('/section3')
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
        $section3 = Section3::find($id);
        $section3->delete();
        return redirect ('/section3');
    }
}
