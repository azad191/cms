<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyerProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tag_line',
        'company_name',
        'company_type',
        'company_type',
        'buyer_description',
        'buyer_profile_image',
        'buyer_banner_image',
        'number_of_employee',
        'buyer_location',
        'Brochures',
        'terms',
        'followers'
        ];
}
