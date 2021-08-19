<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_procedures', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('users_id');
          $table->foreign('users_id')->references('id')->on('Users')->onDelete('cascade');
          $table->time('time_record');
          $table->date('date_record');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_procedures');
    }
}
