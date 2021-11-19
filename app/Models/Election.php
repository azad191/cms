<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'election_name', 'start_date', 'end_date', 'status','election_activity', 'slug'];
}
