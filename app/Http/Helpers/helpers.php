<?php
    use App\Models\Election;
    use App\Models\UserAccess;
    function getElection(){
        if(auth()->user()->role_id == 2){
            return  Election::where('user_id',auth()->user()->id)->first();
        }else{
            return  Election::where('user_id',auth()->user()->id)->orWhere('id', getUserPermission()->election_id)->first();
        }

    }
    function getUserPermission(){
        return UserAccess::where('user_id', auth()->user()->id)->first();
    }
?>
