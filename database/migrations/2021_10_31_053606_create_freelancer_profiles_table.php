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
            $table->string('profile_image')->nullable();
            $table->string('title')->nullable();
            $table->string('working_payment_type')->nullable();
            $table->string('country')->nullable();
            $table->string('description')->nullable();
            $table->text('tags')->nullable();
            $table->string('freelancer_type')->nullable();
            $table->string('english_level')->nullable();
            $table->string('banner_photo')->nullable();
            $table->text('gallery_photo')->nullable();
            $table->string('location')->nullable();
            $table->string('terms');
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
