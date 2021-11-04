<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freelancer_faq extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'faq_question', 'faq_answer'];
}
