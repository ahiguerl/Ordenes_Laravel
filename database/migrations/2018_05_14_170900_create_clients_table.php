<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->string('id')->unique(); // Nit
            $table->timestamps();

            $table->string('name', 100);
            $table->string('address', 200);
            $table->integer('city')->nulleable();
            $table->string('cellphone', 10)->nulleable();
            $table->string('phone', 7)->nulleable();
            $table->string('contact_name')->nulleable();
            $table->string('extension_number', 5)->nulleable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
