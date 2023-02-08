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
        Schema::create('articales', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_description');
            $table->text('full_description')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('author_id');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('articales');
    }
};
