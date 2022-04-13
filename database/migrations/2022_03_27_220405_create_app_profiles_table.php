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
        Schema::create('app_profiles', function (Blueprint $table) {
            $table->id();
            // $table->integer('app_id')->unsigned();
            $table->string('Name');
            $table->string('Email');
            $table->string('Facebook')->nullable();
            $table->string('Snapchat')->nullable();
            $table->string('Instgram')->nullable();
            $table->string('Twitter')->nullable();
            $table->string('TikTok')->nullable();
            $table->string('Social_Media_Icons_Color');
            $table->boolean('is_active')->nullable() ;
            // $table->unsignedBigInteger('app_id');
            $table->foreignId('app_id')->references('id')->on('apps')->onDelete('cascade');
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
        Schema::dropIfExists('app_profiles');
    }
};
