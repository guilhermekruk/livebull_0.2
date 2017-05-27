<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadVeterinariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cad_veterinarios', function (Blueprint $table) {
            $table->increments('CadVetId PK');
            $table->string('CadVetDesc',200);
            $table->string('CadVetGenero',50);
            $table->string('CadVetObs',5000);
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
        Schema::dropIfExists('cad_veterinarios');
    }
}
