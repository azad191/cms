<?php

namespace App\Http\Controllers;

use App\Models\freelancer_profile;
use Illuminate\Http\Request;

class FreelancerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.module.buyer.dashboard');
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
     * @param  \App\Models\freelancer_profile  $freelancer_profile
     * @return \Illuminate\Http\Response
     */
    public function show(freelancer_profile $freelancer_profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\freelancer_profile  $freelancer_profile
     * @return \Illuminate\Http\Response
     */
    public function edit(freelancer_profile $freelancer_profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\freelancer_profile  $freelancer_profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, freelancer_profile $freelancer_profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\freelancer_profile  $freelancer_profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(freelancer_profile $freelancer_profile)
    {
        //
    }
}
