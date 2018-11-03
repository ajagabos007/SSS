<?php

namespace SSS\Http\Controllers;

use SSS\Country;
use Illuminate\Http\Request;


class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *@extends(app.)

     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $countries = Country::all();
        return $countries;
        // $countries = Country::paginate(5);
        // return response()->json([$countries]);
        return view('countries.index',['countries'=>$countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('countries.create');
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
        $country = Country::create([
            'name'=>$request->input('name'),
        ]);
        if($country){
            return redirect()->route('countries.show',['country'=>$country->id])->with('success',$country->name.' created successfully');
        }
        return back()->withInput->with('errors','Error creating new country named: '.$country->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \SSS\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        
        // $country = Country::where('id',$country->id)->first();
        $country = Country::find($country->id);
        return view('countries.show',['country'=>$country]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSS\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
        $country = Country::find($country->id); 
        return view('countries.edit',['country'=>$country]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSS\Country  $country      
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
        $countryUpdate = $country::find($country->id)->update([
              'name' => $request->input('name'),
        ]);
        if($countryUpdate){
            return redirect()->route('countries.show',['country'=>$country->id])
                    ->with ('success','country updated successfully');
        }
        return back()->withInput($request)->with('errors','Errors update country');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSS\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
