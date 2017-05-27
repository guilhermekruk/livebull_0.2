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
            $table->increments('ItemContVacId PK');
            $table->integer('ContVacId FK')->unsigned();
            $table->foreign('ContVacId FK')->references('ContVacId PK')->on('cont_vacinas');
            $table->integer('CadVetId FK')->unsigned();;
            $table->foreign('CadVetId FK')->references('CadVetId PK')->on('cad_veterinarios');;

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
