<?php

namespace SSS\Http\Controllers;

use SSS\Administrator;
use Illuminate\Http\Request;

class AdministratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth:administrator');
    }
    public function index()
    {
        //
        $administrators = Administrator::all();
        return view('administrators.index',['administrators'=>$administrators]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \SSS\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function show(Administrator $administrator)
    {
        //
        $administrator = Administrator::find($administrator->id);
        return view('administrators.show',['administrator'=>$administrator]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSS\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrator $administrator)
    {
        //
        $administrator = Administrator::find($administrator->id);
        return view('administrators.edit',['administrator'=>$administrator]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSS\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrator $administrator)
    {
        //
        return ($administrator);
        return redirect()->route('admin')->with('success','Profile update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSS\Administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrator $administrator)
    {
        //
    }
    public function dashboard(){
        return view('administrators.dashboard');
    }
    public function manage(){
        return view('administrators.manage');
    }
}
