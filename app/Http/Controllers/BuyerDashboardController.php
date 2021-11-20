<?php

namespace App\Http\Controllers;

use App\Models\buyerProfile;
use App\Models\category;
use App\Models\freelancer_profile;
use App\Models\jobPost;
use App\Models\Location;
use App\Models\SendProposal;
use App\Models\Skill;
use App\Models\specialization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class BuyerDashboardController extends Controller
{

    public function dashboard(){

       // $data->buyerProfile
        $id = auth()->user()->id;
        $data =  User::with('buyerProfile')->where('id', $id)->first();
//        $user = User::find($id);
//        $sp = specialization::where('user_id', $id)->first();
//        $buyer_profile = freelancer_profile::where('user_id', $id)->first();

        return view('frontend.module.buyer.buyer_dashboard', compact('data'));

    }
    public function profileView($id){
        $id = auth()->user()->id;
        $data =  User::with('buyerProfile')->where('id', $id)->first();

        return view('frontend.module.buyer.buyer_profile', compact('data'));

    }
    public function update(Request $request, $id){

         $request->all();
    //    return $request->number_of_employee;
         $userData = User::with('buyerProfile')->where('id', $id)->first();
         $buyerData = buyerProfile::where('user_id', $id)->first();
         $userData->buyerProfile->buyer_description;
         $fName = $request->f_name;
         $lName = $request->l_name;
         $name = $fName.' '.$lName;
         $company_name = $request->company_name;
         $buyer_description = $request->buyer_description;
         $company_type = $request->company_type;
         $number_of_employee = $request->number_of_employee;
         $buyer_location = $request->buyer_location;
         // return $buyer_description ;

         //files
        $profileImage = $request->file('buyer_profile_image');

        $bannerImage = $request->file('buyer_banner_image');

        if($request->hasFile('buyer_profile_image')){
            unlink(public_path('backend/uploads/buyer/profile/').$buyerData->buyer_profile_image);
            $profileImageName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $profileImage->getClientOriginalExtension();
            Image::make($profileImage)->resize(100, 100)->save(public_path('backend/uploads/buyer/profile/').$profileImageName );
            $buyerData->buyer_profile_image =  $profileImageName;
        }
        if($request->hasFile('buyer_banner_image')){

            unlink(public_path('backend/uploads/buyer/banner/').$buyerData->buyer_banner_image);

            $bannerImageName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $bannerImage->getClientOriginalExtension();
            Image::make($bannerImage)->resize(350, 172)->save(public_path('backend/uploads/buyer/banner/').$bannerImageName );
            $buyerData->buyer_banner_image = $bannerImageName;

        }

        $userData->name = $name;
        $buyerData->company_name = $company_name;
        $buyerData->company_type = $company_type;
        $buyerData->buyer_description = $buyer_description;
        $buyerData->number_of_employee = $number_of_employee;
        $buyerData->buyer_location = $buyer_location;
        $userData->save();
        $buyerData->save();

        return redirect()->back();
       // return view('frontend.module.buyer.buyer_dashboard', compact('data'));
    }
    //public view  in buyer profile
    public function profile($id){
           $convertId =  base64_decode($id);
           $data =User::with(['buyerProfile','jobPost'])->where('id', $convertId)->first();

            $jobPost =  jobPost::where('user_id', $convertId)->orderBy('id', 'DESC')->simplePaginate(5);;
        return view('frontend.pages.buyer_profile', compact('data', 'jobPost'));
    }

    public function jobPost(){
         $cats = category::whereNull('parent_id')->get();

        $skills =  Skill::get();

        return view('frontend.module.buyer.job_post', compact('cats', 'skills'));
    }

    public function jobPostStore(Request $request, $id){
      // return sprintf("%06d", mt_rand(1, 999999);
         $data = $request->all();
          //  return $data;
         $data['job_id']= random_int(100000, 999999);
         $data['user_id'] = $id;
         $data['category_id'] = json_encode($request->category_id);
         $data['skills'] = json_encode($request->skills);

         $checkBuyer = User::find($id);
         $projectFile = $request->file('project_file');
         //dd($projectFile);
         if($request->hasFile('project_file')){
             $fileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $projectFile->getClientOriginalExtension();
             Image::make($projectFile)->resize(500, 300)->save(public_path('backend/uploads/buyer/jobPost/').$fileName );

             $data['project_file'] = $fileName;
         }

//        $files->move('backend/uploads/freelancer/project', $fileName );

         //return $checkBuyer;
         if(!empty($checkBuyer)){
            // return 'ok';
             jobPost::create($data);
             $notification = array(
                 'message' => 'Your has been successfully added',
                 'alert-type' => 'success'
             );
         }else{
             $notification = array(
                 'message' => 'Sorry! Buyer Not Found',
                 'alert-type' => 'error'
             );
         }
        return redirect()->back()->with($notification);
       //  return redirect()->back();
    }

    public function dashboard1(){
        return view('frontend.module.buyer.buyer_dashboard');
    }

    //show all post in buyer dashboard
    public function showJobPost($id){
        $buyerId = base64_decode($id);
        $data = jobPost::where('user_id', $buyerId)->where('project_status', 'pending')->get();

        $count = SendProposal::select("job_post_id", DB::raw("count(job_post_id) as total"))
            ->groupBy(DB::raw("job_post_id"))
            ->get();
        return view('frontend.module.buyer.latest_job_post', compact('data', 'count'));
    }
    //applied job list with
    public function appliedJob($jobId){
        $jobId = base64_decode($jobId);
        $data=  SendProposal::with('user')->where('job_post_id',$jobId)->get();
       // return $data;

        return view('frontend.module.buyer.applied_job', compact('data'));
    }

}
