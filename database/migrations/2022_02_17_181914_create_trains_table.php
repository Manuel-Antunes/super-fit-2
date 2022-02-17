<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->integer('personal_id')->nullable(false);
            $table->foreign('personal_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('client_id')->nullable(false);
            $table->foreign('client_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('date')->nullable(false);
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
        Schema::dropIfExists('trains');
    }
}
