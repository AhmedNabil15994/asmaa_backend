<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_types', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->json('title')->nullable();
            $table->json('desc')->nullable();
            $table->tinyInteger('order')->nullable();
            $table->boolean('status');
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_types');
    }
}
