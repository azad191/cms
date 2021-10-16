<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->bigInteger('parent_id');
            $table->string('name');
            $table->string('slug');
            $table->string('target')->nullable();
            $table->text('url')->nullable();
            $table->string('menu_type')->nullable();
            $table->text('external_link')->nullable();
            $table->tinyInteger('status')->default(1);

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
        Schema::dropIfExists('manues');
    }
}
