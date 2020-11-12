<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */                      

    public function up()
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mobile');
            $table->string('name');
            $table->string('city');
            $table->string('address');
            // $table->string('select_material');
            // $table->string('material_type');
            // $table->string('quantity_type');
            $table->text('select_material');
            $table->text('material_type');  
            $table->text('quantity_type'); 

            $table->text('min_rate');
            $table->text('max_rate');
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
        Schema::dropIfExists('agreements');
    }
}
