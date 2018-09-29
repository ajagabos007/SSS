<?php

namespace SSS\Http\Controllers;

use SSS\Guardian;
use Illuminate\Http\Request;

class GuardiansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth:guardian');
    }
    public function index()
    {
        //
        $guardians = Guardian::all();
        return view('guardians.index',['guardian'=>$guardians]);
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
     * @param  \SSS\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function show(Guardian $guardian,$id=null)
    {
        //
        $guardian = Guardian::find($id);
        return view('guardians.show',['guardian'=>$guardian]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSS\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardian $guardian, $id)
    {
        //
        $guardian = Guardian::find($id);
        return view('guardians.edit',['guardian'=>$guardian]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSS\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guardian $guardian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSS\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guardian $guardian)
    {
        //
    }
}
