<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SendProposal;
use Illuminate\Http\Request;

class JobProposalController extends Controller
{
    public function sendProposal(Request $request, $id, $jobId){
        $freelancer_id = base64_decode($id);
        $jobId = base64_decode($jobId);
       // return $request->all();
        $request->validate([
            'amount' => ['required'],
            'duration' => ['required'],
            'description' => ['required'],
            'proposal_file' => 'max:500 |mimes:jpeg,jpg,png,pdf,docx|'
        ]);
        $data =  $request->all();
        $data['freelancer_id'] =$freelancer_id;
        $data['job_post_id'] =$jobId;
        $proposalFile = $request->file('proposal_file');
        //check apply job which freelancer in this job applied or not
       $check = SendProposal::where('freelancer_id', $freelancer_id)->where('job_post_id', $jobId)->first();
        if( !empty($check)){
            $notification = array(
                'message' => 'Your send proposal already added, try again another job',
                'alert-type' => 'error'
            );
        }else{
            if($request->hasFile('proposal_file')){
                $fileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $proposalFile->getClientOriginalExtension();
                $proposalFile->move('backend/uploads/freelancer/sendProposal/', $fileName );
                $data['proposal_file'] = $fileName;
            };
            SendProposal::create($data);
            $notification = array(
                'message' => 'Send Proposal successfully Added',
                'alert-type' => 'success'
            );
        }
        return redirect()->back()->with( $notification);

    }
    public function viewProposal($id){
        $ids = base64_decode($id);
       return SendProposal::find($ids);
    }
}
