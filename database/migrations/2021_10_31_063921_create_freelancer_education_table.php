<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelancerEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancer_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('education_title');
            $table->string('session');
            $table->string('edu_ending');
            $table->string('institute_name');
            $table->text('edu_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('freelancer_education');
    }
}
