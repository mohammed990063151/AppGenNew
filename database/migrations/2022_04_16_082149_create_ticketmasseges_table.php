<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketmassegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketmasseges', function (Blueprint $table) {
            $table->id();
            
            
            $table->string('text');
            
            $table->integer('ticket_id');
           
            $table->integer('sender')->default(0);
            $table->integer('admin_id')->default(0);
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
        Schema::dropIfExists('ticketmasseges');
    }
}
