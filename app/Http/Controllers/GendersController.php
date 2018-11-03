<?php

namespace SSS\Http\Controllers;

use SSS\Gender;
use Illuminate\Http\Request;

class GendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $genders = Gender::all();
        return view('genders.index',['genders'=>$genders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('genders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illu"{{route(admin.login.submit)}}minate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $gender = Gender::create([
           'name'=> $request->input('name'),
        ]);
        if($gender){
            return redirect()->route('genders.show',['gender'=>$gender->id])->with('success',$gender->name.' created successfully');
        }
        
        return back()->withInput->with('errors','Error creating new gender');
    }

    /**
     * Display the specified resource.
     *
     * @param  \SSS\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function show(Gender $gender)
    {
        //
        $gender = Gender::find($gender->id);
        return view('genders.show',['gender'=>$gender]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSS\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function edit(Gender $gender)
    {
        //
        return view('genders.edit',['gender'=>$gender]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSS\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gender $gender)
    {
        //
        
        $genderUpdate = Gender::find($gender->id)->update([
                'name' => $request->input('name'),
        ]);
        if($genderUpdate){  
            return (redirect()->route('genders.show',['gender'=>$gender->id]))
            ->with('success','Gender updated succefully');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSS\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gender $gender)
    {
        //
    }
}
