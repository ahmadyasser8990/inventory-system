<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSecureBondTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('secure_bonds', function(Blueprint $table)
        {
            $table->unsignedBigInteger('client_id')->nullable()->change();
            $table->unsignedBigInteger('user_id')->after('id');
            $table->string('payment_method',50)->after('client_tax_no');
            $table->string('secureBond_type',50)->after('client_tax_no');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('secure_bonds', function(Blueprint $table)
        {
            $table->unsignedBigInteger('client_id')->nullable(false)->change();
            $table->dropColumn('payment_method');
            $table->dropColumn('secureBond_type');
            $table->dropColumn('user_id');
        });
    }
}
