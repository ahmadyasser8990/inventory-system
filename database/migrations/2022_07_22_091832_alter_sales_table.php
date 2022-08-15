<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales', function(Blueprint $table)
        {
            
            $table->unsignedBigInteger('user_id')->after('id');
            $table->string('payment_method',50)->after('client_tax_no');
            $table->string('sales_type',50)->after('client_tax_no');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales', function(Blueprint $table)
        {
            $table->unsignedBigInteger('client_id')->nullable(false)->change();
            $table->dropColumn('payment_method');
            $table->dropColumn('sales_type');
            $table->dropColumn('user_id');
        });
    }
}
