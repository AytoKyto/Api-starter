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
<<<<<<< HEAD:database/migrations/2022_07_03_171926_create_date_field_table.php
        Schema::create('date_field', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_component')->nullable();
            $table->string('title');
            $table->date('content');
=======
        Schema::create('category_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
>>>>>>> 546088734d365d9eebd57e5d774a5b2d99982298:database/migrations/2022_05_08_135028_create_category_tables.php
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
<<<<<<< HEAD:database/migrations/2022_07_03_171926_create_date_field_table.php
        Schema::dropIfExists('date_field');
=======
        Schema::dropIfExists('category_tables');
>>>>>>> 546088734d365d9eebd57e5d774a5b2d99982298:database/migrations/2022_05_08_135028_create_category_tables.php
    }
};
