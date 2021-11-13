<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id');
            $table->foreignId('freelancer_id');
            $table->longText('description');
            $table->string('price');
            $table->dateTime('date');
            $table->string('file');
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
        Schema::dropIfExists('job_proposals');
    }
}
