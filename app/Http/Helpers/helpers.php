<?php
    use App\Models\Election;
    function getElection(){
      return  Election::where('user_id',auth()->user()->id)->first();
    }
?>
