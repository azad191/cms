<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateNominationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_nominations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('election_id');
            $table->foreignId('user_id')->nullable();
            $table->string('employee_id_no')->unique();
            $table->string('token_code')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('department');
            $table->string('position');
            $table->string('vote_count')->nullable();
            $table->enum('status', ['cancel', 'approve']);
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
        Schema::dropIfExists('candidate_nominations');
    }
}
