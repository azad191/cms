<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateNomination extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'election_id',
        'verify_user_id',
        'employee_id_no',
        'token_code',
        'voter_no',
        'voted',
        'name',
        'email',
        'position_id',
        'vote_count',
        'status',
    ];
}
