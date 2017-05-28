<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cad_animals', function (Blueprint $table) {
            $table->increments('CadAnimalId_PK');
            $table->integer('CadTipoAnimalId_FK')->unsigned();
            $table->foreign('CadTipoAnimalId_FK')->references('CadDestAnimalId_PK')->on('cad_tipo_animals');
            $table->integer('CadRacaId_FK')->unsigned();
            $table->foreign('CadRacaId_FK')->references('CadRacaId_PK')->on('cad_racas');
            $table->integer('CadEspId_FK')->unsigned();
            $table->foreign('CadEspId_FK')->references('CadEspId_PK')->on('cad_especies');
            $table->string('CadAnimalIdenti',70);
            $table->date('CadAnimalDTreg'); //data de registro do animal
            $table->date('CadAnimalDTnasc'); //data de nascimento do animal
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
        Schema::dropIfExists('cad_animals');
    }
}
