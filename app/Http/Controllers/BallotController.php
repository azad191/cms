<?php

namespace App\Http\Controllers;

use App\Models\Ballot;
use App\Models\CandidateNomination;
use App\Models\position;
use Illuminate\Http\Request;
use Image;

class BallotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
         $positionId = $id;
         $getPosition =  position::find($positionId);
         $position = position::where('election_id', getElection()->id)->get();

         $candidate = CandidateNomination::where('election_id', $getPosition->election_id)->where('status', 'approve')->get();

        return view('backend.modules.ballot.create_ballot', compact('candidate','position'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
      //  return $id;
        $data = $request->all();
        $symbolFile = $request->file('symbol');
        $fileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $symbolFile->getClientOriginalExtension();
        Image::make($symbolFile)->resize(300, 300)->save('backend/uploads/ballot/'.$fileName);
        $data['symbol'] =$fileName ;
        $data['election_id'] =$id;
        $data['user_id'] = auth()->user()->id;

        Ballot::create($data);
        $notification = array(
            'message' => 'Ballot successfully added!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ballot  $ballot
     * @return \Illuminate\Http\Response
     */
    public function show(Ballot $ballot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ballot  $ballot
     * @return \Illuminate\Http\Response
     */
    public function edit(Ballot $ballot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ballot  $ballot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ballot $ballot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ballot  $ballot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ballot $ballot)
    {
        //
    }
}
