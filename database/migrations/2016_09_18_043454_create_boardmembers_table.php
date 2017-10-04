<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boardmembers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order');
            $table->string('display_name');
            $table->string('degree');
            $table->string('email')->unique();
            $table->string('position_group');
            $table->string('position_name');
            $table->text('quote');
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
        Schema::dropIfExists('boardmembers');
    }
}
