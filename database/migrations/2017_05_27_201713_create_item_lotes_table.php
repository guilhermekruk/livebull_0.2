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
            $table->increments('ItemLoteId PK');
            $table->integer('CadLoteId FK')->unsigned();
            $table->foreign('CadLoteId FK')->references('CadLoteId PK')->on('cad_lotes');
            $table->integer('CadAnimalId FK')->unsigned();
            $table->foreign('CadAnimalId FK')->references('CadAnimalId PK')->on('cad_animals');
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
