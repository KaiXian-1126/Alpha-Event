<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('Event_id');
            $table->string('Event_name');
            $table->date('Event_startDate');
            $table->date('Event_EndDate');
            $table->time('Event_StartTime', 0);
            $table->time('Event_EndTime', 0);
            $table->string('Location');
            $table->longText('Announcement');
            $table->longText('Description');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
