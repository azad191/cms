<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_id',
        'job_title',
        'project_level',
        'description',
        'price',
        'price_min',
        'price_max',
        'job_type',
        'freelancer_type',
        'category_id',
        'english_level',
        'experience_preferred',
        'skills',
        'location',
        'job_qualification',
        'duration',
        'project_expire',
        'project_deadline',
        'project_file',
        'project_status',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
