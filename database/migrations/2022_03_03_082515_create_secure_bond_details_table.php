<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecureBondDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secure_bond_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('secure_bond_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();


            $table->foreign('secure_bond_id')->references('id')->on('secure_bonds')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secure_bond_details');
    }
}
