<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Election;
use App\Models\position;
use Illuminate\Http\Request;

class BallotSettingController extends Controller
{
    public function index($id){
        $electionId = $id;
       $data = position::where('election_id', $electionId)->get();
        return view('backend.modules.ballot.settings', compact('data'));
    }
}
