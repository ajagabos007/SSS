<?php

namespace SSS\Http\Controllers;

use SSS\Title;
use Illuminate\Http\Request;

class TitlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $titles = Title::all();
        return view('titles.index',['titles'=>$titles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('titles/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $title = Title::create([
             'name'=>$request->input('name'),
        ]);
        if($title){
            return redirect()->route('titles.show',['title'=>$title->id])
                    ->with('success','Title created successfully');
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \SSS\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title)
    {
        //
        $title = Title::find($title->id);

        return view('titles.show',['title'=>$title]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSS\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $title)
    {
        //
        $title = Title::find($title->id);
        return view('titles.edit',['title'=>$title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSS\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Title $title)
    {
        //
        $titleUpdate = $title::find($title->id)->update([
            'name'=>$request->input('name'),
        ]);
        if($titleUpdate){
            return redirect()->route('titles.show',['title'=>$title->id])
                    ->with('sucess','Title update successfully');
        }

        return back()-withInput()->with('errors','Error updating title');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSS\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Title $title)
    {
        //
    }
}
