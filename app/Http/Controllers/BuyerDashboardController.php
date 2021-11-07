<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerDashboardController extends Controller
{
    
    public function dashboard(){

        return view('frontend.module.buyer.buyer_dashboard');
    }
}
