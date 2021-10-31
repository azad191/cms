<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelancerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancer_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('user_name')->unique();
            $table->string('profile_image');
            $table->string('title');
            $table->string('working_payment_type');
            $table->string('country');
            $table->string('description');
            $table->text('tags');
            $table->string('freelancer_type');
            $table->string('english_level');
            $table->string('banner_photo');
            $table->text('gallery_photo');
            $table->string('location');
            $table->softDeletes();
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
        Schema::dropIfExists('freelancer_profiles');
    }
}
