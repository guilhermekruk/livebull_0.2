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
            $table->increments('ItemAbateId PK');
            $table->integer('ContAbtId FK')->unsigned();
            $table->foreign('ContAbtId FK')->references('ContAbtId PK')->on('cont_abates');
            $table->integer('CadLoteId FK')->unsigned();
            $table->foreign('CadLoteId FK')->references('CadLoteId PK')->on('cad_lotes');
            $table->integer('CadAnimalId FK')->unsigned();
            $table->foreign('CadAnimalId FK')->references('CadAnimalId PK')->on('cad_animals');
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
