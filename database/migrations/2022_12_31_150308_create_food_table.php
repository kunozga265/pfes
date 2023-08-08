<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->string('image')->nullable();
            $table->string('serving_size')->nullable();
            $table->string('serving_unit')->nullable();
            $table->double('net_weight')->nullable();
            $table->double('energy')->nullable();
            $table->double('carbohydrate')->nullable();
            $table->double('fiber')->nullable();
//            $table->double('no_of_carbs_exchange')->nullable();
            $table->double('protein')->nullable();
            $table->double('fat')->nullable();
            $table->string('unpeeled_weight')->nullable();
            $table->string('more_info')->nullable();
            $table->string('source')->nullable();
            $table->integer('group_id');
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
        Schema::dropIfExists('food');
    }
}
