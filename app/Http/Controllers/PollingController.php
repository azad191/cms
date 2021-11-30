<?php

namespace App\Http\Controllers;

use App\Models\position;
use Illuminate\Http\Request;

class PollingController extends Controller
{
    public function polling($id, $slug){
       // return [$id,$slug];
       $position =  position::where('election_id', $id)->get();
        return view('polling', compact('id', 'slug', 'position'));
    }
    public function pollingCast(Request $request, $id){
      return  $request->all();
    }
}
