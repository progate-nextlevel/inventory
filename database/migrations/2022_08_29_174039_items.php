<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Items extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('id_item');
            $table->text('item_name');
            $table->unsignedBigInteger('id_supplier');
            $table->unsignedBigInteger('id_warehouse');
            $table->unsignedBigInteger('id_rack');
            $table->date('exp_date');
            $table->unsignedBigInteger('id_status');
            $table->text('barcode');
            $table->foreign('id_supplier')->references('id_supplier')->on('suppliers');
            $table->foreign('id_warehouse')->references('id_warehouse')->on('warehouses');
            $table->foreign('id_rack')->references('id_rack')->on('racks');
            $table->foreign('id_status')->references('id_status')->on('statuses');
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
