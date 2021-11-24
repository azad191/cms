<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoterNominationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voter_nominations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('election_id');
            $table->foreignId('user_id')->nullable();
            $table->foreignId('candidate_id')->unique();
            $table->string('employee_id_no')->unique();
            $table->string('token_code')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('department');
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
        Schema::dropIfExists('voter_nominations');
    }
}
