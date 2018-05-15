<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationRepairProcessWorkOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_process_work_order', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            // foreign Keys
            $table->integer('work_order_id')->unsigned(); // Create the column that will contains id of the work_order
            $table->foreign('work_order_id')->references('id')->on('work_orders'); // Set the relationship
            $table->integer('repair_process_id')->unsigned(); //This column will contains the repair process id
            $table->foreign('repair_process_id')->references('id')->on('repair_processes'); // This sets the relationship with repair_process table
            // End foreign Keys
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repair_process_work_order');
    }
}
