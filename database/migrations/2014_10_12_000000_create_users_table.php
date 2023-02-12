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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('image')->nullable();
            $table->string('mobile');
            $table->enum('gender',['male','female']);
            $table->enum('type',['admin','author','user','viewer']);
            $table->boolean('status')->default(1);
            $table->date('dob');
            $table->text('bio')->nullable();
            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('li')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
