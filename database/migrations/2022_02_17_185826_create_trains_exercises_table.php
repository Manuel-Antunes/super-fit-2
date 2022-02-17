<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains_exercises', function (Blueprint $table) {
            $table->id();
            $table->integer('exercise_id')->nullable(false);
            $table->foreign('exercise_id')->references('id')->on('exercises')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('train_id')->nullable(false);
            $table->foreign('train_id')->references('id')->on('trains')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sequencies')->nullable(false);
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
        Schema::dropIfExists('trains_exercises');
    }
}
