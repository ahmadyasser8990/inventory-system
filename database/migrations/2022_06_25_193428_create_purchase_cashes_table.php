<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_cashes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('purchase_type');
            $table->string('payment_method');
            $table->string('supplier_name');
            $table->string('supplier_phone');
            $table->string('supplier_tax_no');
            $table->double('final_total',8,2);
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
        Schema::dropIfExists('purchase_cashes');
    }
}
