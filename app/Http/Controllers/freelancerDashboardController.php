<?php

namespace App\Http\Controllers;

use App\Models\SendProposal;
use Illuminate\Http\Request;

class freelancerDashboardController extends Controller
{
    public function dashboard(){

        return view('frontend.module.freelancer.freelancer_dashboard');
    }
    public function sendProposal(){

        $data = SendProposal::where('freelancer_id', auth()->user()->id)->where('status', 'pending')->get();
        //return $data;
        return view('frontend.module.freelancer.send_proposal',compact('data'));
    }

}
