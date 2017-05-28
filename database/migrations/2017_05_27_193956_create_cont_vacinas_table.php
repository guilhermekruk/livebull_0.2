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
            $table->increments('ContVacId_PK');
            $table->integer('CadAnimalId_FK')->unsigned();
            $table->foreign('CadAnimalId_FK')->references('CadAnimalId_PK')->on('cad_animals');
            $table->integer('CadLoteId_FK')->unsigned();
            $table->foreign('CadLoteId_FK')->references('CadLoteId_PK')->on('cad_lotes');
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
