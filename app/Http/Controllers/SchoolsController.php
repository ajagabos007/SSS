<?php

namespace SSS\Http\Controllers;

use SSS\School;
use SSS\Administrator;
use Auth;

use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

    }
    
    public function index()
    {
         $admin = Administrator::find(Auth::user('administrator')->id);
         $schools = $admin->schools;
         return view('schools.index',['schools'=>$schools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating input

        $this->validate($request,[
            'name' => 'required|string',
            'school_type_id' =>'required|int',
            'administrator_id' =>'required|int',
            'address' =>'required|string',
            'country_id' =>'required|int',
            'state_id' =>'required|int',
        ]);

        $school = School::create([
            'name'=>$request->input('name'),
            'school_type_id'=>$request->input('school_type_id'),
            'address'=>$request->input('address'),
            'administrator_id'=>$request->input('administrator_id'),
            'country_id'=>$request->input('country_id'),
            'state_id'=>$request->input('state_id'),
            // 'lga_id'=>$request->input('lga_id')
        ]);
        if($school){
            return view('schools.show',['school'=>$school->id])->with('success',$school->name.' created successfully');
        }
        return back()->withInput->with('errors','Error creating new school named: '.$school->name);
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \SSS\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSS\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSS\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSS\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
