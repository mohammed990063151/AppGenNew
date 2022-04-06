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
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('App_Name');
            $table->string('Discrptions');
            $table->string('Web_Url')->nullable();
            $table->string('WhatsappNumber')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->string('Logo')->nullable();
            $table->string('SplashScreenImage')->nullable();
=======
            $table->string('name', 999);
            $table->string('link');
            $table->string('version', 999)->nullable();
            $table->string('image')->nullable();
            $table->foreignId('user_id')->references('id')->on('users');
>>>>>>> 6d932898483538b5530cecb4c6678f6f9858b80d
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
        Schema::dropIfExists('apps');
    }
};
