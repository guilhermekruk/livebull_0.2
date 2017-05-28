<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_lotes', function (Blueprint $table) {
            $table->increments('ItemLoteId_PK');
            $table->integer('CadLoteId_FK')->unsigned();
            $table->foreign('CadLoteId_FK')->references('CadLoteId_PK')->on('cad_lotes');
            $table->integer('CadAnimalId_FK')->unsigned();
            $table->foreign('CadAnimalId_FK')->references('CadAnimalId_PK')->on('cad_animals');
            $table->date('ItemLoteDTinsert');
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
        Schema::dropIfExists('item_lotes');
    }
}
