<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\wishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function wishList($id, $userId, $type){

        $user = User::find($userId);
        if(isset($user)){
            $exits =  wishList::where('user_id', $userId)->where('freelancer_profile_id', $id)->first();
            if (!isset($exits)){
                if(auth()->user()->role_id == 3 and $type=='buyer'){

                    wishList::create([
                        'user_id' =>  $userId ,
                        'job_post_id' => $id,
                        'type' => $type,
                    ]);
                    return response()->json(['status'=>200]);

                }elseif(auth()->user()->role_id == 2 and $type=='freelancer'){
                    wishList::create([
                        'user_id' => $userId,
                        'freelancer_profile_id' =>$id,
                        'type' => $type,
                    ]);
                    return response()->json(['status'=>200]);
                }
            }else{
                return response()->json(['status'=>403]);
            }
        }else{
            return response()->json(['status'=>404]);
        }
    }
    public function showWishList($id){
        $userId = base64_decode($id);
  //      $getUser = User::with(['wishList'])->whereHas('wishList')->where('id', $userId)->get();
       // $getUser = wishList::with(['user','freelancer'])->whereHas('user')->get();
        $getUser = wishList::where('user_id', $userId)->get();
      $data =  DB::table('wish_lists')
       //   ->select('users.*','wish_lists.*','freelancer_profiles.*')
                //->join('users','wish_lists.user_id', 'users.id')
               ->join('freelancer_profiles', 'wish_lists.freelancer_profile_id', 'freelancer_profiles.user_id')
               ->join('users','wish_lists.freelancer_profile_id','users.id')
              ->where('wish_lists.user_id', $userId)
            ->get();
     return view('frontend.module.buyer.wishlist', compact('data'));

    }
}
