<?php

namespace App\Http\Controllers;

use App\Models\buyerProfile;
use App\Models\freelancer_profile;
use App\Models\jobPost;
use App\Models\specialization;
use App\Models\User;
use Illuminate\Http\Request;

class BuyerDashboardController extends Controller
{

    public function dashboard(){
        $id = auth()->user()->id;
        $data =  User::with('buyerProfile')->where('id', $id)->first();
       // $data->buyerProfile

//        $user = User::find($id);
//        $sp = specialization::where('user_id', $id)->first();
//        $buyer_profile = freelancer_profile::where('user_id', $id)->first();

        return view('frontend.module.buyer.buyer_dashboard', compact('data'));

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
    public function profile(){
        return view('frontend.module.buyer.buyer_profile');
    }

    public function jobPost(){
        return view('frontend.module.buyer.job_post');
    }

    public function jobPostStore(Request $request, $id){
      // return sprintf("%06d", mt_rand(1, 999999);
         $data = $request->all();
       // return $data;
         $data['job_id']= random_int(100000, 999999);
         $data['user_id'] = $id;
         $checkBuyer = User::find($id);
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
}
