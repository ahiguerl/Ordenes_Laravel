<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('client_id'); // Will contain clients id
            $table->foreign('client_id')->references('id')->on('clients');
            $table->integer('user_id')->unsigned(); // Will contain employees id
            $table->foreign('user_id')->references('id')->on('users');

            $table->dateTime('date');
            $table->boolean('is_open');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_orders');
    }
}
