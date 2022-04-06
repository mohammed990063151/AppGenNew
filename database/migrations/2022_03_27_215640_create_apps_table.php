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
            $table->string('App_Name');
            $table->string('Discrptions');
            $table->string('Web_Url')->nullable();
            $table->string('WhatsappNumber')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->string('Logo')->nullable();
            $table->string('SplashScreenImage')->nullable();
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
