<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function($table) {
            $table->increments('id');
            $table->string('text');
            $table->string('author');
            $table->integer('chatroom_id')->unsigned();

            $table->foreign('chatroom_id')->references('id')->on('chatrooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chats');
    }
}
