<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'election_name', 'start_date', 'end_date','reg_start', 'reg_end','status','election_activity', 'slug'];

    public function userAccess(){
        return $this->hasOne(UserAccess::class, 'election_id', 'id');
    }

}
