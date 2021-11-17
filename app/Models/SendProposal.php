<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendProposal extends Model
{
    use HasFactory;
    protected $fillable = ['freelancer_id', 'job_post_id', 'amount','duration', 'expire_date', 'description', 'status', 'proposal_file'];
}
