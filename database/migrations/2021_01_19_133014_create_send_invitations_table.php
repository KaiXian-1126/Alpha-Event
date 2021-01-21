<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_invitations', function (Blueprint $table) {
            $table->id();
            $table->integer('invitation_id');
            $table->integer('Guest_id')->nullable();
            $table->string('Guest_list')->nullable();
            $table->integer('Event_id');
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
        Schema::dropIfExists('send_invitations');
    }
}
