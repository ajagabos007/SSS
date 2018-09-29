<?php

namespace SSS\Http\Controllers;

use SSS\State;
use SSS\Country;
use Illuminate\Http\Request;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $states = State::all();
        return view('states.index',['states'=>$states]);
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
