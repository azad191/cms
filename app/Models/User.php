<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'role_id',
        'status',
        'email',
        'password',
        'gender',
        'verify_code'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
//start for freelancer
    function freelancerProfile(){
        return $this->hasOne(freelancer_profile::class, 'user_id');
    }
    public function specialization(){
        return $this->hasOne(specialization::class, 'user_id');
    }
    public function skill(){
        return $this->hasMany(freelancerSkill::class, 'user_id');
    }
    public function faq(){
        return $this->hasMany(freelancer_faq::class, 'user_id');
    }
    public function project(){
        return $this->hasMany(preelancer_project::class, 'user_id');
    }
    public function education(){
        return $this->hasMany(freelancerEducation::class, 'user_id');
    }
    public function experience(){
        return $this->hasMany(freelancerExperience::class, 'user_id');
    }

    //start for buyer
    public function buyerProfile(){
        return $this->hasOne(buyerProfile::class, 'user_id');
    }
    public function jobPost(){
        return $this->hasMany(jobPost::class, 'user_id');
    }
    public function jobPostFilter(){
        return $this->hasMany(jobPost::class, 'user_id');
    }



}
