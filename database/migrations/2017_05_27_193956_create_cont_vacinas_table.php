<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContVacinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cont_vacinas', function (Blueprint $table) {
            $table->increments('ContVacId PK');
            $table->integer('CadAnimalId FK')->unsigned();
            $table->foreign('CadAnimalId FK')->references('CadAnimalId PK')->on('cad_animals');
            $table->integer('CadLoteId FK')->unsigned();
            $table->foreign('CadLoteId FK')->references('CadLoteId PK')->on('cad_lotes');
            $table->date('ContVacDtUltima');




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
        Schema::dropIfExists('cont_vacinas');
    }
}
