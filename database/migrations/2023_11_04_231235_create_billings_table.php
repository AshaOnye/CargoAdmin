<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            // $table->string('shipid')->nullable();
            $table->string('bill_name')->nullable();
            $table->string('order_id')->nullable();
            $table->longtext('address')->nullable();
            $table->string('payment')->nullable();
            $table->datetime('order_date')->nullable();
            $table->integer('price')->nullable();
            $table->integer('total')->nullable();
            $table->string('order_descp')->nullable();
            $table->string('delivery_option')->nullable();
            $table->datetime('datetime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billings');
    }
}
