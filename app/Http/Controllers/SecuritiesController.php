<?php

namespace SSS\Http\Controllers;

use SSS\Security;
use Illuminate\Http\Request;

class SecuritiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        $this->middleware('auth:security');
    }
    public function index()
    {
        //
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
     * @param  \SSS\Security  $security
     * @return \Illuminate\Http\Response
     */
    public function show(Security $security)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSS\Security  $security
     * @return \Illuminate\Http\Response
     */
    public function edit(Security $security)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSS\Security  $security
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Security $security)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSS\Security  $security
     * @return \Illuminate\Http\Response
     */
    public function destroy(Security $security)
    {
        //
    }
}
