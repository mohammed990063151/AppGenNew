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
                        $table->string('AppName');
                        $table->string('Link');
                        $table->string('Discrptions');
                        $table->string('WhatsApp');
                        $table->string('Phone');
                        $table->string('Splash_Screen')->nullable();
                        $table->string('version')->nullable();
                        $table->string('Logo')->nullable();
                        $table->foreignId('user_id')->references('id')->on('users')->nullable();
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
