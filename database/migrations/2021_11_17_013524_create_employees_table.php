<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('election_id');
            $table->foreignId('department_id');
            $table->foreignId('designation_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('employee_id')->unique();
            $table->string('nid_no')->unique();
            $table->string('father_name', 70);
            $table->string('mother_name', 70);
            $table->integer('zip_code');
            $table->string('city');
            $table->string('district');
            $table->string('present_address');
            $table->string('permanent_address')->nullable();
            $table->string('employee_image');
            $table->string('nid_image');
            $table->enum('status', ['active', 'inactive'])->default('active');

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
        Schema::dropIfExists('employees');
    }
}
