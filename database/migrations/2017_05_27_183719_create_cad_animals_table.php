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
            $table->increments('CadAnimalId PK');
            $table->integer('CadTipoAnimalId FK')->unsigned();
            $table->foreign('CadTipoAnimalId FK')->references('CadDestAnimalId PK')->on('cad_tipo_animals');
            $table->integer('CadRacaId FK')->unsigned();
            $table->foreign('CadRacaId FK')->references('CadRacaId PK')->on('cad_racas');
            $table->integer('CadEspId FK')->unsigned();
            $table->foreign('CadEspId FK')->references('CadEspId PK')->on('cad_especies');
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
