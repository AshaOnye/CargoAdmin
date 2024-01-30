<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   // In create_parcel_table.php

public function up()
{
    Schema::create('parcels', function (Blueprint $table) {
        $table->id();
        $table->string('trackingId');
        $table->string('shipmentType');
        $table->json('senderInfo');
        $table->json('receiverInfo');
        $table->json('itemDetails');
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
        Schema::dropIfExists('parcels');
    }
}
