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
            $table->foreignId('user_id')->nullable();
            $table->foreignId('election_id');
            $table->foreignId('verify_user_id')->nullable();
            $table->string('employee_id_no');
            $table->string('token_code')->nullable();
            $table->string('voter_no')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('voted', ['yes', 'no'])->default('no');
            $table->enum('status', ['cancel', 'approve', 'pending'])->default('pending');
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
