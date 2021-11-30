<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('election_name');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->dateTime('reg_start')->nullable();
            $table->dateTime('reg_end')->nullable();
            $table->dateTime('registration_date')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('election_activity')->default('building');
            $table->string('slug');
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
        Schema::dropIfExists('elections');
    }
}
