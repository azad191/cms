<?php

namespace App\Http\Controllers;

use App\Models\CandidateNomination;
use Illuminate\Http\Request;

class CandidateNominationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nomonation_registration');
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
     * @param  \App\Models\CandidateNomination  $candidateNomination
     * @return \Illuminate\Http\Response
     */
    public function show(CandidateNomination $candidateNomination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CandidateNomination  $candidateNomination
     * @return \Illuminate\Http\Response
     */
    public function edit(CandidateNomination $candidateNomination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CandidateNomination  $candidateNomination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CandidateNomination $candidateNomination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CandidateNomination  $candidateNomination
     * @return \Illuminate\Http\Response
     */
    public function destroy(CandidateNomination $candidateNomination)
    {
        //
    }
}
