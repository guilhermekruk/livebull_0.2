<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContPercasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cont_percas', function (Blueprint $table) {
            $table->increments('ContPercaId_PK');
            $table->integer('CadAnimalId_FK')->unsigned();
            $table->foreign('CadAnimalId_FK')->references('CadAnimalId_PK')->on('cad_animals');
            $table->date('ContPercaDt');

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
        Schema::dropIfExists('cont_percas');
    }
}
