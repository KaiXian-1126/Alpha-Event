<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge', function (Blueprint $table) {
            $table->id();
            $table->boolean("daily_login");
            $table->boolean("open_leaderboard");
            $table->date("week_start_date");
            $table->date("week_end_date");
            $table->integer("create_event_count");
            $table->integer("invitation_count");
            $table->boolean('invitation_achieved');
            $table->boolean('create_event_achieved');
            $table->string("user_email");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challenge');
    }
}
