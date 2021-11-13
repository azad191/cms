<?php

namespace App\Http\Controllers;

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
//       return User::with('jobPost')->whereHas('jobPost', function ($query) use ($id){
//            $query->where('user_id', 10);
//        })->get();


        return view('frontend.pages.job_details', compact('getJob', 'userId'));
    }
    public function jobFilter(Request $request){

        return $request->all();
        User::with('jobPost')->WhereHas('jobPost', function( $query ) use ($request){

        });
    }
    public function download($id){
        $job = jobPost::find($id);
        $file=public_path('backend/uploads/buyer/jobPost/'.$job->project_file);
        return response()->download($file);
    }
}
