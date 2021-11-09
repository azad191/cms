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
            $table->string('job_id', 100);
            $table->string('job_title');
            $table->string('project_level', 100);
            $table->longText('description');
            $table->enum('price', ['fixed', 'hourly'])->default('fixed');
            $table->integer('price_min');
            $table->integer('price_max')->nullable();
            $table->string('job_type', 100);
            $table->string('freelancer_type', 100);
            $table->string('category_id');
            $table->string('english_level', 50);
            $table->string('experience_preferred', 50);
            $table->string('skills');
            $table->string('location', 50)->nullable();
            $table->text('job_qualification')->nullable();
            $table->string('duration', 50);
            $table->datetime('project_expire');
            $table->datetime('project_deadline')->nullable();
            $table->datetime('project_file')->nullable();
            $table->enum('project_status', ['pending', 'ongoing', 'completed'])->default('pending');
            $table->enum('status', ['active', 'inactive'])->default('active');
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
