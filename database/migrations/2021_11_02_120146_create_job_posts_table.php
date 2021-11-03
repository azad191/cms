<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('job_id');
            $table->string('job_title');
            $table->string('description');
            $table->string('cost_form');
            $table->string('cost_to');
            $table->string('job_type');
            $table->string('categories');
            $table->string('job_location');
            $table->string('job_qualification');
            $table->datetime('job_duration');
            $table->string('job_status');
            $table->string('followers');
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
        Schema::dropIfExists('job_posts');
    }
}
