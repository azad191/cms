<?php

namespace App\Http\Controllers;

use App\Models\freelancer_profile;
use App\Models\specialization;
use App\Models\User;
use Illuminate\Http\Request;
use Image;


class FreelancerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(6);
        $sp = specialization::where('user_id', 6)->first();
        $free_profile = freelancer_profile::where('user_id', 6)->first();

        return view('frontend.module.freelancer.dashboard', compact('user', 'sp', 'free_profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
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
    public function update(Request $request, freelancer_profile $freelancer_profile, $id)
    {
      //  return $request->location;
         $request->all();
        $file = $request->file('profile_image');
        $bannerFile = $request->file('banner_photo');


        $findData = User::find($id);

        $proFile = freelancer_profile::where('user_id', $id)->first();

        if($request->hasFile('profile_image')){

            $fileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $file->getClientOriginalExtension();
            $file->move('backend/uploads/freelancer/profile', $fileName );

            $proFile->profile_image = $fileName;
            $proFile->save();

        }
        if($request->hasFile('banner_photo')){

            $bannerFileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $bannerFile->getClientOriginalExtension();
            $bannerFile->move('backend/uploads/freelancer/banner', $bannerFileName );

            $proFile->banner_photo = $bannerFileName;
            $proFile->save();

        }






        $proFile->user_name = $request->user_name;
        $proFile->title = $request->title;
        $proFile->country = $request->country;
        $proFile->description = $request->description;
        $proFile->freelancer_type = $request->freelancer_type;
        $proFile->english_level = $request->english_level;
        $proFile->location = $request->location;
        $proFile->save();

        return redirect()->back();

     //  return $findData->with('freelancerProfile');


//        return view('frontend.module.buyer.dashboard');
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
