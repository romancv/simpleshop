<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('body');
            $table->integer('stock');
            $table->decimal('price');
            $table->decimal('rating');
            $table->boolean('public');
        });

        Schema::create('product_images', function (Blueprint $table) {
           $table->increments('id');
           $table->timestamps();
           $table->integer('product_id')->unsigned();
           $table->string('href');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('products');
    }
}
