<?php

namespace App\Http\Controllers;

use App\Models\buyerProfile;
use App\Models\freelancer_profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class userRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pages.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data =  $request->all();
            $data['name'] = $request->first_name.' '.$request->last_name;
            $data['password'] = Hash::make($request->password);
            $data['role_id'] = $request->role_id;
            User::create($data);

          $lastUser =  User::latest('id')->first();
          $user_id = $lastUser->id;
          $data['user_id'] = $user_id;

          if($request->role_id == 2){
          //    return 'buyer';
              buyerProfile::create($data);
          }else{
           //   return 'freelancer';
              freelancer_profile::create($data);
          }


        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );

        return Redirect::to('/user/registration')->with($notification);

       //   return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
