<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mobile');
            $table->string('bill_no');
            $table->text('material_name');
            $table->text('material_type');
            $table->text('material_quantity_type');
            $table->text('quantity');
            $table->text('material_price');
            $table->text('material_gst');
            $table->text('material_tax');
            $table->text('total_price');
            $table->integer('deliveryCharge');
            $table->integer('otherCharge');
            $table->integer('loadingCharge');
            $table->integer('payment_amount');
            $table->string('payment_cheque');
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
        Schema::dropIfExists('purchases');
    }
}
