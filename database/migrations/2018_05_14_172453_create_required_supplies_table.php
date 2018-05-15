<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequiredSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('required_supplies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            // foreign Keys
            $table->string('supply_id', 12);
            $table->foreign('supply_id')->references('id')->on('supplies');
            $table->string('product_id', 12);
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('repair_process_id')->unsigned();
            $table->foreign('repair_process_id')->references('id')->on('repair_processes');
            // End foreign Keys

            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('required_supplies');
    }
}
