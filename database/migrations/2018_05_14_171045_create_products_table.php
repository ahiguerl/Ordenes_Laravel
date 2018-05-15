<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('id', 12)->primary();
            $table->timestamps();

            // foreign Keys
            $table->float('tax', 2, 2); // Value-added tax
            // End foreign Keys

            $table->string('description', 50);
            $table->float('purchase_price', 9, 2);
            $table->float('sale_price', 9, 2);
            $table->string('url_image');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
