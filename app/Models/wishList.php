<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishList extends Model
{
    use HasFactory;
    protected $fillable =['user_id', 'freelancer_profile_id', 'job_post_id', 'type'];

//    public function freelancer(){
//        return $this->belongsTo(freelancer_profile::class, 'id');
//    }
//    public function user(){
//        return $this->hasMany(User::class, 'id');
//    }
//    public function freelancerWishList(){
//        return $this->belongsTo(freelancer_profile::class, 'id');
//    }
}
