<?php

namespace App\Http\Controllers;

use App\Models\CandidateNomination;
use App\Models\Election;
use App\Models\position;
use App\Models\User;
use App\Models\VoterNomination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class NominationController extends Controller
{
    public function create($id, $slug){
        $allPosition =  position::where('election_id', $id)->get();
        $check =  Election::where('id', $id)->where('slug', $slug)->first();
        $id = $check->id;
        $slug = $check->slug;

        if (isset($check)){
            return view('nomonation_registration', compact('id', 'slug', 'allPosition'));
        }else{
            return 'not ok';
        }
    }
    public function store(Request $request, $id, $slug)
    {

        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'employee_id_no' => 'required|exists:employees,employee_id',
            'type' => ['required'],
            'password' => 'required | same:confirm_password|min:6',
            'confirm_password' => ['required'],
        ]);
        $data = $request->all();
        $data['election_id'] = $id;
        $data['token_code'] =  random_int(000000, 999999);
        $data['voter_no'] =  random_int(0000, 9999);
        $data['password'] = Hash::make($request->password);

        if ($request->type == 'voter'){
            $data['role_id'] = 5;
            User::create($data);
            $getUser =  User::latest()->first();
            $data['user_id'] = $getUser->id;
            VoterNomination::create($data);
        }else{
            $data['role_id'] = 4;
            User::create($data);
            $getUser =  User::latest()->first();
            $data['user_id'] = $getUser->id;
            $data['position_id'] = $request->position_id;
            CandidateNomination::create($data);
        }
        $notification = array(
            'message' => 'Registration has been successfully added!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with( $notification);
    }
}
