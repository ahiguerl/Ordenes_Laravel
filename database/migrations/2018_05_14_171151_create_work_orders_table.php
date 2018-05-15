<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps(); // columns created_at and updated_at

            // foreign Keys
            $table->integer('service_order_id')->unsigned(); // Will contain service_orders id
            $table->foreign('service_order_id')->references('id')->on('service_orders'); // sets the relationship

            $table->integer('repaired_item_id')->unsigned(); // Will contain service_orders id
            $table->foreign('repaired_item_id')->references('id')->on('repaired_items');

            $table->integer('order_status_id')->unsigned();
            $table->foreign('order_status_id')->references('id')->on('order_statuses');
            // end foreign keys

            $table->string('description', 255);
            $table->string('remark', 255); // Will contain notes or additional descriptions
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_orders');
    }
}
