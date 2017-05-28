<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemContVacinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_cont_vacinas', function (Blueprint $table) {
            $table->increments('ItemContVacId_PK');
            $table->integer('ContVacId_FK')->unsigned();
            $table->foreign('ContVacId_FK')->references('ContVacId_PK')->on('cont_vacinas');
            $table->integer('CadVetId_FK')->unsigned();;
            $table->foreign('CadVetId_FK')->references('CadVetId_PK')->on('cad_veterinarios');;

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
        Schema::dropIfExists('item_cont_vacinas');
    }
}
