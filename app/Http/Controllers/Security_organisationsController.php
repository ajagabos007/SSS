<?php

namespace SSS\Http\Controllers;

use SSS\Security_organisation;
use Illuminate\Http\Request;

class Security_organisationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $security_organisations = Security_organisation::all();
        return view('security_organisations.index',['security_organisations'=>$security_organisations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('security_organisations.create');
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
        $security_organisation = Security_organisation::create([
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'phone_number'=>$request->input('phone_number'),
            'email'=>$request->input('email'),
        ]);
        if($security_organisation){
            
            return redirect()->route('security_organisations.show',['security_organisation'=>$security_organisation])->with('success', $security_organisation->name ." created successfully");
        }
        return back()->withInput->with('errors', 'Error creating new security organisation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \SSS\Security_organisation  $security_organisation
     * @return \Illuminate\Http\Response
     */
    public function show(Security_organisation $security_organisation)
    {
        //
        $security_organisation = Security_organisation::find($security_organisation->id);
        return view('security_organisations.show',['security_organisation'=>$security_organisation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSS\Security_organisation  $security_organisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Security_organisation $security_organisation)
    {
        //
        $security_organisation = Security_organisation::find($security_organisation->id);
        return view('security_organisations.edit',['security_organisation'=>$security_organisation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSS\Security_organisation  $security_organisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Security_organisation $security_organisation)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSS\Security_organisation  $security_organisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Security_organisation $security_organisation)
    {
        //
    }
}
