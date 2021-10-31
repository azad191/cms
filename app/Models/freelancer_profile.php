<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freelancer_profile extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_name',
        'user_id',
        'profile_image',
        'title',
        'working_payment_type',
        'country',
        'description',
        'tags',
        'freelancer_type',
        'english_level',
        'banner_photo',
        'gallery_photo',
        'location',
        'terms'
    ];
}
