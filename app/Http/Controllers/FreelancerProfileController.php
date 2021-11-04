<?php

namespace App\Http\Controllers;

use App\Models\freelancer_profile;
use App\Models\preelancer_project;
use App\Models\specialization;
use App\Models\User;
use App\Models\freelancerSkill;
use App\Models\freelancerEducation;
use App\Models\freelancerExperience;
use App\Models\freelancer_faq;
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

    public function skills(Request $request){

       $name =  $request->skillName;
       $value = $request->skillValue;
       freelancerSkill::create([
           'user_id' => 6,
           'skill_name' => $name,
           'skill_value' => $value
       ]);

        return response()->json(['result'=> $name]);
    }

    public function allSkills(){
        $user_id = 6;
        $allSkills = freelancerSkill::where('user_id',$user_id)->get();
        // $allSkills = User::with('skill')->whereHas('skill', function($q){
        //     $q->where('user_id', 6);
        // })->get();

         return response()->json(['result'=> $allSkills]);
     }
     public function SkillsById($id){
    //    $skill = User::with('skill')->whereHas('skill', function($q){
    //         $q->where('user_id', $id);
    //    })->get();
       $data = User::with('skill')->whereHas('skill', function( $query ){
        $query->whereNotNull('user_id', );
    })->get();

        return response()->json(['result'=> $skill]);
     }

     public function education(Request $request, $id){
        // return $request->all();
       
        $userId = $id;
        $data = $request->all();
        $data['user_id'] = $userId;
       // freelancerEducation::where('user_id', $id)->first();
       if($request->submit_type == 'education'){
            freelancerEducation::create($data);
       }elseif($request->submit_type == 'project'){
           //return 'project';
        
           $files=   $request->file('files');
    
            $fileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $files->getClientOriginalExtension();
            $files->move('backend/uploads/freelancer/project', $fileName );
            $data['file'] = $fileName;
            preelancer_project::create($data);
       }elseif($request->submit_type == 'faq'){
            freelancer_faq::create($data);
       }
       else{
            freelancerExperience::create($data);
       }

        return redirect()->back();
     }
}
