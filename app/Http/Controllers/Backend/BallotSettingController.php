<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BallotSettingController extends Controller
{
    public function index($id){
        return $id;
        return view('backend.modules.ballot.settings');
    }
}
