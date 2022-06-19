<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailySavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_saving', function (Blueprint $table) {
            $table->id();  
            $table->unsignedBigInteger('daily_id');
            $table->foreign('daily_id')->references('id')->on('daily');
            $table->unsignedBigInteger('saving_id');
            $table->foreign('saving_id')->references('id')->on('savings');
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
        Schema::dropIfExists('daily_saving');
    }
}
