<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer_id');
            $table->foreignId('job_post_id');
            $table->integer('amount');
            $table->string('duration', 70);
            $table->dateTime('expire_date')->nullable();
            $table->text('description');
            $table->string('proposal_file')->nullable();
            $table->enum('status', ['pending', 'approve', 'cancel', 'completed'])->default('pending');
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
        Schema::dropIfExists('send_proposals');
    }
}
