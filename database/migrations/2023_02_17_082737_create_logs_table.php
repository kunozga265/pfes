<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->double('quantity');
            $table->double('carbs');
            $table->double('protein')->nullable();
            $table->double('fiber')->nullable();
            $table->double('fat')->nullable();
            $table->double('energy')->nullable();
            $table->integer('meal_id');
            $table->integer('user_id');
            $table->double('date');
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
        Schema::dropIfExists('logs');
    }
}
