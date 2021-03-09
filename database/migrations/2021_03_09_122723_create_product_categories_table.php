<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->timestamps();
        });

        Schema::table('products', function($table) {
            $table->increments('id')->change();
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('body', 500)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function($table) {
            $table->id()->change();
            $table->dropColumn('category_id');
            $table->text('body')->change();
        });

        Schema::dropIfExists('product_categories');
    }
}
