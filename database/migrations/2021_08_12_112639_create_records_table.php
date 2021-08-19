<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
          $table->id();
            $table->unsignedBigInteger('users_procedures_id');
              $table->unsignedBigInteger('procedures_id');
              $table->foreign('users_procedures_id')->references('id')->on('users_procedures');
              $table->foreign('procedures_id')->references('id')->on('procedures');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
