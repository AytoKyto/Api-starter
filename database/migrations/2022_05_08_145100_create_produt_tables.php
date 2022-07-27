<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tables', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category_tables');
            $table->integer('price');
            $table->unsignedBigInteger('collection_id',)->nullable();
            $table->foreign('collection_id')->references('id')->on('collections_tables');
            $table->unsignedBigInteger('imageproduct_id');
            $table->foreign('imageproduct_id')->references('id')->on('imageproduct_tables');
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
        Schema::dropIfExists('product_tables');
    }
};
