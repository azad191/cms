<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('send_proposal_id');
            $table->foreignId('job_post_id');
            $table->foreignId('freelancer_id');
            $table->foreignId('buyer_id');
            $table->integer('amount');
            $table->dateTime('start_date');
            $table->dateTime('expire_date');
            $table->text('description');
            $table->enum('order_activity', ['pending', 'ongoing', 'completed', 'cancel'])->default('ongoing');
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
        Schema::dropIfExists('orders');
    }
}
