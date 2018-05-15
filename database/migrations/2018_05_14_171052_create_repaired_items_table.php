<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repaired_items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            // foreign Keys
            $table->string('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            // end foreign Keys

            $table->string('serial_number', 20)->nulleable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repaired_items');
    }
}
