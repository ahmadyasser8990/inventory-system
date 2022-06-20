<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('gold', 8, 2)->default(0.00);
            $table->decimal('dimaond', 8, 2)->default(0.00);
            $table->decimal('baguette', 8, 2)->default(0.00);
            $table->decimal('marquis', 8, 2)->default(0.00);
            $table->decimal('big_stone', 8, 2)->default(0.00);
            $table->decimal('princess', 8, 2)->default(0.00);
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
        Schema::dropIfExists('prices');
    }
}
