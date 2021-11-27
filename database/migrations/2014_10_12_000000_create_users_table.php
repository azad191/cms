<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
=======
            $table->foreignId('role_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender', 10);
            $table->string('status')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('verify_code')->nullable();
            $table->rememberToken();
            $table->softDeletes();
>>>>>>> 8b71f0b5417b4f2e43fb2edfdbb8267735cb2016
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
        Schema::dropIfExists('users');
    }
}
