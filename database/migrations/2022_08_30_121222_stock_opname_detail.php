<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StockOpnameDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_opname_detail', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_opname');
            $table->unsignedBigInteger('id_item');
            $table->integer('qty');
            $table->integer('operator');
            $table->integer('id_status');
            $table->foreign('id_opname')->references('id_opname')->on('stock_opname');
            $table->foreign('id_item')->references('id_item')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
