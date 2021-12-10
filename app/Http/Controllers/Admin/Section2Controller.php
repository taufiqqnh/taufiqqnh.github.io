<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Section2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section2s = Section2::all();
        return view('admin.section2.index', compact('section2s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.section2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $section2 = new section2;
        $section2->title = $request->title;
        $section2->desc = $request->desc;
        $section2->save();
        return redirect ('/section2');
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
        return view('admin.section2.edit')
        ->with('section2', Section2::where('id', $id)->first());
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
        $section2 = Section2::find($id);
        $section2->title = $request->title;
        $section2->desc = $request->desc;
        $section2->save();
        return redirect ('/section2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section2 = Section2::find($id);
        $section2->delete();
        return redirect ('/section2');
    }
}
