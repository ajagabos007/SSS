<?php

namespace SSS\Http\Controllers;

use SSS\School_type;
use Illuminate\Http\Request;

class School_typesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $school_types = School_type::all();
        return view('school_types.index',['school_types'=>$school_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('school_types.create');
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
        $school_type = School_type::create([
            'name'=>$request->name,
        ]);
        if($school_type){
            return redirect()->route('school_types.show',['school_type'=>$school_type->id])->with('success',$school_type->name.' created succesffully');
        }
        return back()->withInput($request)->with('errors','Error creating new school type named: '.$school_type->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \SSS\School_type  $school_type
     * @return \Illuminate\Http\Response
     */
    public function show(School_type $school_type)
    {
        //$school_type = School_type::where('id',School_type->id)->first();

        $school_type = School_type::find($school_type->id);
        return view('school_types.show',['school_type'=>$school_type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSS\School_type  $school_type
     * @return \Illuminate\Http\Response
     */
    public function edit(School_type $school_type)
    {
        //
        $school_type = School_type::find($school_type->id);
        return view('school_types.edit',['school_type'=>$school_type]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSS\School_type  $school_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School_type $school_type)
    {
        //
        $school_typeUpdate = School_type::find($school_type->id)->update([
            'name'=>$request->input('name'),
        ]);
        if($school_typeUpdate){
            return redirect()->route('school_types.show',['school_type'=>$school_type->id])
            ->with ('success','school type updated successfully');
        }
          return back()->withInput($request)->with('errors','Errors update school_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSS\School_type  $school_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(School_type $school_type)
    {
        //
    }
}
