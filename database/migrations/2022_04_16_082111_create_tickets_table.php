<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
                        // $table->enum('firends', ['eslam' , 'hitem', 'jksa'])->default('jksa');
            $table->string('subject');
            $table->enum('status',['pending','inprogress','copmplated']);
            $table->string('sender');
            $table->integer('topic_id');
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
        Schema::dropIfExists('tickets');
    }
}

