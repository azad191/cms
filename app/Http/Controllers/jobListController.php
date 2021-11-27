<?php

namespace App\Http\Controllers;

use App\Models\buyerProfile;
use App\Models\category;
use App\Models\jobPost;
use App\Models\Location;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class jobListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =   User::with('jobPost')->whereHas('jobPost', function ($query){
           $query->orderBy('id', 'DESC');
       })->paginate(5);
        $cats = category::get();
        $skills = Skill::get();
        $div = Location::get();
           // jobPost::get();
         return view('frontend.pages.job_list', compact('data', 'cats', 'skills', 'div'));
    }

    /**
     * Show the form for creating a new resource.
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
    public function details($id){
        $id =  base64_decode($id);
       $getJob =  jobPost::find($id);
       $userId = $getJob->user_id;
      $getUser = User::find($userId);
      $buyerProfile =buyerProfile::where('user_id', 15)->first();
//       return User::with('jobPost')->whereHas('jobPost', function ($query) use ($id){
//            $query->where('user_id', 10);
//        })->get();


        return view('frontend.pages.job_details', compact('getJob', 'getUser', 'buyerProfile'));
    }
    public function jobFilter(Request $request){

        $allRequest =  $request->all();
       // return $allRequest;
        $categories = $request->category;
        $getSkills = $request->skills;
       // return $categories;
      //  dd($categories);
        $convert = json_encode($categories);

        //return $convert;

        $cats = category::get();
        $skills = Skill::get();
        $div = Location::get();

//        foreach ($categories as $catItem){
//           $catsFetch = jobPost::where('category_id', 'LIKE', '%'.$catItem.'%')->get();
//        }
     //   return $data;

    //    jobPost::where('category_id', 'LIKE', '%'.'2','15'.'%')->get();

       // 'user_ids', 'LIKE', '%'.json_encode($user_ids).'%'

        if((!empty($request->location) or !empty($request->type)) and (empty($request->category) and empty($request->skills))){

            $data = jobPost::whereIn('location', isset($request->location) ? $request->location : ['none'])->orWhereIn('freelancer_type', isset($request->type) ? $request->type:['none'])
                ->with('user')->paginate(5);
            $type = 'filter';


            return view('frontend.pages.job_list', compact('data','type', 'cats', 'skills', 'div'));
        }elseif((!empty($request->location) or !empty($request->type)) and (!empty($request->category) and !empty($request->skills))){
            $fetchData = jobPost::whereIn('location', isset($request->location) ? $request->location : ['none'])->orWhereIn('freelancer_type', isset($request->type) ? $request->type:['none'])
                ->with('user');
            foreach ($categories as $catItem){
                $data = $fetchData->orWhere('category_id', 'LIKE', '%'.$catItem.'%');
            }
            foreach ($getSkills as $skillItem){
                $data = $fetchData->orWhere('skills', 'LIKE', '%'.$skillItem.'%')->paginate(5);
            }
            $type = 'filter';
            return view('frontend.pages.job_list', compact('data', 'type','cats', 'skills', 'div'));
        }elseif (!empty($request->location) or !empty($request->type) and !empty($request->category)){
            $fetchData = jobPost::whereIn('location', isset($request->location) ? $request->location : ['none'])->orWhereIn('freelancer_type', isset($request->type) ? $request->type:['none'])
                ->with('user');
            foreach ($categories as $catItem){
                $data = $fetchData->orWhere('category_id', 'LIKE', '%'.$catItem.'%')->paginate(5);
            }
            $type = 'filter';
            return view('frontend.pages.job_list', compact('data','type', 'cats', 'skills', 'div'));
        }elseif(!empty($request->location) or !empty($request->type) and !empty($request->skills)){
            $fetchData = jobPost::whereIn('location', isset($request->location) ? $request->location : ['none'])->orWhereIn('freelancer_type', isset($request->type) ? $request->type:['none'])
            ->with('user');
            foreach ($getSkills as $skillItem){
                $data =  $fetchData->orWhere('category_id', 'LIKE', '%'.$skillItem.'%')->paginate(5);
            }
            $type= 'filter';
            return view('frontend.pages.job_list', compact('data', 'type','cats', 'skills', 'div'));
        }elseif((empty($request->location) or empty($request->type)) and (!empty($request->category))){

            $fetchData = jobPost::whereIn('location', isset($request->location) ? $request->location : ['none'])->orWhereIn('freelancer_type', isset($request->type) ? $request->type:['none'])
                ->with('user');
            foreach ($request->category as $catItem){
                $data = $fetchData->orWhere('category_id', 'LIKE', '%'.$catItem.'%')->paginate(5);
            }
            $type = 'filter';
            return view('frontend.pages.job_list', compact('data','type', 'cats', 'skills', 'div'));
        }elseif((empty($request->location) or empty($request->type)) and !empty($request->skills)){
            $fetchData = jobPost::whereIn('location', isset($request->location) ? $request->location : ['none'])->orWhereIn('freelancer_type', isset($request->type) ? $request->type:['none'])
                ->with('user');
            foreach ($getSkills as $skillItem){
                $data =  $fetchData->orWhere('category_id', 'LIKE', '%'.$skillItem.'%')->paginate(5);
            }
            $type = 'filter';
            return view('frontend.pages.job_list', compact('data','type', 'cats', 'skills', 'div'));
        }elseif((empty($request->location) or empty($request->type)) and !empty($request->category)){
            $fetchData = jobPost::whereIn('location', isset($request->location) ? $request->location : ['none'])->orWhereIn('freelancer_type', isset($request->type) ? $request->type:['none'])
                ->with('user');
            foreach ($request->category as $catItem){
                $data =  $fetchData->orWhere('skills', 'LIKE', '%'.$catItem.'%')->paginate(5);
            }
           // return $data;
            $type = 'filter';
            return view('frontend.pages.job_list', compact('data','type', 'cats', 'skills', 'div'));
        }else{
            $notification = array(
                'message' => 'Your filter not found!',
                'alert-type' => 'error'
            );
            return  redirect()->back()->with($notification);
        }


//       $data = jobPost::whereIn('location', isset($request->location) ? $request->location : ['none'])->orWhereIn('freelancer_type', isset($request->type) ? $request->type:['none'])
//           ->with('user')->get();
//       return $data;



     //  return view('frontend.job_list', compact());
    }
    public function download($id){
        $job = jobPost::find($id);
        $file=public_path('backend/uploads/buyer/jobPost/'.$job->project_file);
        return response()->download($file);
    }

    public function proposal(Request $request, $id){


         $ids = base64_decode($id);
         $data =  jobPost::find($ids);
       //return $data;
        return view('frontend.pages.proposal', compact('data'));
    }
}
