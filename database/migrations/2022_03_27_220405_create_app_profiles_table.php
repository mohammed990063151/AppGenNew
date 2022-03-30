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
            $table->string('orgname');
            $table->string('orgemail');
            $table->string('ogwhatsapp')->nullable();
            $table->string('color');
            $table->string('pc');
            $table->string('sc');
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
