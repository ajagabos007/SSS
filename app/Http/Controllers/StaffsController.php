<?php

namespace SSS\Http\Controllers;

use SSS\Staffs;
use Illuminate\Http\Request;
use Auth;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        //   $this->middleware('auth:staff')->except('auth:administrator');
    }
    public function index()
    {
        //
       $staffs = Staffs::all();
       
       //check the if admin is making the request
       if(session()->has('login_administrator_59ba36addc2b2f9401580f014c7f58ea4e30989d')){

           $staffs = Auth::user()->staff;
            return view('administrators.staffs.index',['staffs'=>$staffs]);
       };

      return Auth::user();
       return view('staffs.index',['staffs'=>$staffs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('staffs.create');
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
        $defaultPassword = Hash::make('SSSstaff');
        return $defaultPassword;
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \SSS\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSS\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSS\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSS\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
