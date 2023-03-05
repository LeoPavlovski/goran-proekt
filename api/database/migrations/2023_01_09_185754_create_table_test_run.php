<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_run', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('exercise_id')->unsigned()->nullable();
            $table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
            $table->text('input');
            $table->text('output');
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
        Schema::dropIfExists('table_test_run');
    }
};
