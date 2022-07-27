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
        Schema::create('imageproduct_tables', function (Blueprint $table) {
            $table->id();
            $table->string('title');
<<<<<<< HEAD:database/migrations/2022_04_13_123707_create_articles_table.php
            $table->longText('content');
            $table->string('author');
            $table->string('category');
            $table->string('publi_type');
            $table->string('title_seo');
            $table->string('content_seo');
=======
            $table->string('image');
            $table->string('alt');
>>>>>>> 546088734d365d9eebd57e5d774a5b2d99982298:database/migrations/2021_09_08_153841_create_imageproduct_tables.php
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
        Schema::dropIfExists('imageproduct_tables');
    }
};
