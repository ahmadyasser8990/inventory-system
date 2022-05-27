<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('tax_no');
            $table->text('address');
            $table->double('gold_price', 8, 2)->nullable();
            $table->double('dimaond1_price', 8, 2)->nullable();
            $table->double('dimaond2_price', 8, 2)->nullable();
            $table->double('dimaond3_price', 8, 2)->nullable();
            $table->double('dimaond4_price', 8, 2)->nullable();
            $table->double('dimaond5_price', 8, 2)->nullable();
            $table->double('baguette_price', 8, 2)->nullable();
            $table->double('marquis_price', 8, 2)->nullable();
            $table->double('big_stone_price', 8, 2)->nullable();
            $table->double('princess_price', 8, 2)->nullable();
            $table->string('colored_price')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
