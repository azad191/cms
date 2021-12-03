<?php
    use App\Models\Election;
    use App\Models\UserAccess;
    use App\Models\Admin;
    use Illuminate\Support\Facades\Session;
    function getElection(){
        if(auth()->user()->role_id == 2){
            return  Election::where('user_id',auth()->user()->id)->where('id',Session::get('electionId'))->first();
        }else{
            return  Election::where('id', getUserPermission()->election_id)->first();
        }

    }

    function getUserPermission(){
        return UserAccess::where('user_id', auth()->user()->id)->first();
    }
    function ElectionInfo(){
      $getE =  Election::where('user_id',auth()->user()->id)->where('id', Session::get('electionId'))->first();
      return $getE->id;
    }
    function organization(){
       return Admin::where('user_id', auth()->user()->id)->first();
}

?>
