<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_expense', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('daily_id');
            $table->foreign('daily_id')->references('id')->on('daily');
            $table->unsignedBigInteger('expense_id');
            $table->foreign('expense_id')->references('id')->on('expense');
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
        Schema::dropIfExists('daily_expense');
    }
}
