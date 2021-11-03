<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('tag_line')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_type')->nullable();
            $table->text('buyer_description')->nullable();
            $table->string('buyer_profile_image')->nullable();
            $table->string('buyer_banner_image')->nullable();
            $table->string('number_of_employee')->nullable();
            $table->string('buyer_location')->nullable();
            $table->string('Brochures')->nullable();
            $table->string('terms');
            $table->text('followers')->nullable();
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
        Schema::dropIfExists('buyer_profiles');
    }
}
