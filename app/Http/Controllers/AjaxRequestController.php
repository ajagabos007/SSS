<?php

namespace SSS\Http\Controllers;

use Illuminate\Http\Request;
use SSS\Country;
use SSS\State;
use SSS\Lga;
use SSS\School;
use SSS\School_type;
use SSS\Classe;

class AjaxRequestController extends Controller
{

    public function getStates(Request $request)
    {
        $country_id = $request->country_id;
        if($country_id!=null){
            $country = Country::find($country_id);
            $states = $country->states;
            return $states;
        }
        else{
            return null;
        }
       
    }
    public function getLgas(Request $request)
    {
        $state_id = $request->state_id;
        if($state_id!=null){
            $state = State::find($state_id);
            $lgas = $state->lgas;
            return $lgas;
        }
        else{
            return null;
        }
       
    }
    public function getClasses(Request $request)
    {
        $school_id = $request->school_id;
        if($school_id!=null){
            $school = School::find($school_id);
            $school_type = School_type::find($school->school_type_id);
            $classes = $school_type->classes;
            return $classes;
        }
        else{
            return null;
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = Country::all();
        return view('states.create',['countries'=>$countries]);
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
        $state = State::create([
        'name'=> $request->input('name'),
        'country_id' => $request ->input('country_id'),
        ]);

        if($state){
            return redirect()->route('states.show',['state'=>$state])
                    ->with('success', $state->name.' state created successfully');
        }
        return back()->withInput->with('errors', 'Error creating new state');
    }

    /**
     * Display the specified resource.
     *
     * @param  \SSS\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
        $state = State::find($state->id);
        return view('states.show',['state'=>$state]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSS\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSS\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSS\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        //
    }
}
