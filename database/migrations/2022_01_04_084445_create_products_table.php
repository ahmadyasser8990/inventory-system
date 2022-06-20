<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('extra_no');
            $table->string('design_no');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('supplier_id');
            $table->double('gold', 8, 2);
            $table->double('purchase_price', 8, 2);
            $table->double('dimaond_1', 8, 2)->nullable();
            $table->double('dimaond_2', 8, 2)->nullable();
            $table->double('dimaond_3', 8, 2)->nullable();
            $table->double('dimaond_4', 8, 2)->nullable();
            $table->double('dimaond_5', 8, 2)->nullable();
            $table->double('baguette', 8, 2)->nullable();
            $table->double('marquis', 8, 2)->nullable();
            $table->double('big_stone', 8, 2)->nullable();
            $table->double('princess', 8, 2)->nullable();
            $table->string('colored')->nullable();
            $table->double('sale_price', 8, 2)->nullable();

            $table->string('item_type');
            $table->string('color')->nullable();
            $table->string('purity')->nullable();
            $table->text('description')->nullable();
            $table->text('status');
            $table->string('image')->default('default.png');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
