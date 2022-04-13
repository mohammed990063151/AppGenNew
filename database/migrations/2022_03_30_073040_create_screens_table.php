<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScreensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screens', function (Blueprint $table) {
            $table->id();
            $table->string('screen_type');
            $table->string('image');
            $table->string('Discrption1st')->nullable();
            $table->string('Color');
            $table->string('ContainarButtonBarColor');
            $table->string('IconsBackgroundColor');
            $table->string('IconsColor');
            //$table->unsignedBigInteger('profile_id')->nullable();
            $table->foreignId('profile_id')->references('id')->on('app_profiles');
            $table->foreignId('app_id')->references('id')->on('apps')->onDelete('cascade');

            //$table->foreign('profile_id')->references('id')->on('app_profiles')->onDelete('cascade');
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
        Schema::dropIfExists('screens');
    }
}
