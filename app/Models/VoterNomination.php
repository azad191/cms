<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoterNomination extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'election_id',
        'verify_user_id',
        'employee_id_no',
        'token_code',
        'voter_no',
        'name',
        'email',
        'email',
        'status',
    ];
}
