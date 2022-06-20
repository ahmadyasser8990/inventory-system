<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecureBondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secure_bonds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_id');
            $table->string('client_name');
            $table->string('client_phone');
            $table->string('client_tax_no');
            $table->decimal('sub_total', 8, 2)->default(0.00);
            $table->string('discount_type')->nullable();
            $table->decimal('discount_value', 8, 2)->default(0.00);
            $table->decimal('vat_value', 8, 2)->default(0.00);
            $table->decimal('final_total', 8, 2)->default(0.00);
            $table->date('invoice_date');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secure_bonds');
    }
}
