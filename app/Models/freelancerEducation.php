<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freelancerEducation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'education_title', 'session', 'start', 'end', 'institute_name', 'edu_description'];
}
