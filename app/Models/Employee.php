<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'election_id',
        'department_id',
        'designation_id',
        'name',
        'email',
        'employee_id',
        'nid_no',
        'father_name',
        'mother_name',
        'zip_code',
        'city',
        'district',
        'present_address',
        'permanent_address',
        'employee_image',
        'nid_image',
        'status',
    ];
}
