<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelancerExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancer_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('job_designation');
            $table->string('company_name');
            $table->date('start');
            $table->date('end')->nullable();
            $table->string('continue')->nullable();
            $table->text('exp_description')->nullable();
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
        Schema::dropIfExists('freelancer_experiences');
    }
}
