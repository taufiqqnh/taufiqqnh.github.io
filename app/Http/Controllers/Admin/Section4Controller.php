<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section4;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Section4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section4s = Section4::all();
        return view('admin.section4.index', compact('section4s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.section4.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $section4 = new Section4;
        $section4->title = $request->title;
        $section4->satuan = $request->satuan;
        $section4->price = $request->price;
        $section4->feature1 = $request->feature1;
        $section4->feature2 = $request->feature2;
        $section4->feature3 = $request->feature3;
        $section4->feature4 = $request->feature4;
        $section4->feature5 = $request->feature5;
        $section4->feature6 = $request->feature6;
        $section4->save();
        return redirect ('/section4');
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
        return view('admin.section4.edit')
            ->with('section4', Section4::where('id', $id)->first());
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
        $section4 = Section4::find($id);
        $section4->title = $request->title;
        $section4->satuan = $request->satuan;
        $section4->price = $request->price;
        $section4->feature1 = $request->feature1;
        $section4->feature2 = $request->feature2;
        $section4->feature3 = $request->feature3;
        $section4->feature4 = $request->feature4;
        $section4->feature5 = $request->feature5;
        $section4->feature6 = $request->feature6;
        $section4->save();
        return redirect ('/section4');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section4 = Section4::find($id);
        $section4->delete();
        return redirect ('/section4');
    }
}
