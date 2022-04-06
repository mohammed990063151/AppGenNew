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
            $table->integer('TwitterLink')->unsigned();
            $table->string('InstgramLink')->nullable();
            $table->string('FacebookLink')->nullable();
            $table->string('SnapchatLink')->nullable();
            $table->string('TikTokLink')->nullable();
            $table->string('ButtonBarColor')->nullable();
            $table->string('IconsBackgroundColor');
            $table->string('Icons_Color');
            $table->boolean('CopyRightStutas');
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
