<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freelancerSkill extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'skill_name', 'skill_value'];
}
