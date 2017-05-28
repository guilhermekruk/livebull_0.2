<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemAbatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_abates', function (Blueprint $table) {
            $table->increments('ItemAbateId_PK');
            $table->integer('ContAbtId_FK')->unsigned();
            $table->foreign('ContAbtId_FK')->references('ContAbtId_PK')->on('cont_abates');
            $table->integer('CadLoteId_FK')->unsigned();
            $table->foreign('CadLoteId_FK')->references('CadLoteId_PK')->on('cad_lotes');
            $table->integer('CadAnimalId_FK')->unsigned();
            $table->foreign('CadAnimalId_FK')->references('CadAnimalId_PK')->on('cad_animals');
            $table->decimal('ItemAbatePeso',6,3);
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
        Schema::dropIfExists('item_abates');
    }
}
