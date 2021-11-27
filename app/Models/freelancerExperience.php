<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freelancerExperience extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'job_designation', 'company_name', 'start', 'end', 'continue', 'exp_description'];
}
