<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('ID_PEP');
            $table->string('ID_ALL');
            $table->string('TIPO');
            $table->string('CODIGO');
            $table->string('NOMBRE1');
            $table->string('NOMBRE2');
            $table->string('APATERNO');
            $table->string('AMATERNO');
            $table->string('TIPODOCUMENTO');
            $table->string('NRODOCUMENTO');
            $table->string('LEXTENSION');
            $table->string('ABREVPAIS');
            $table->string('PAIS');
            $table->string('DEPARTAMENTO');
            $table->string('PROVINCIA');
            $table->string('TIPOPEP');
            $table->string('PAISCARGO');
            $table->string('CARGO');
            $table->string('ENTIDAD');
            $table->string('GESTION');
            $table->string('JUSTIFICACION');
            $table->string('FECHAREPORTE');
            $table->string('CARGOALL');
            $table->string('ENTIDADALL');
            $table->string('JUSTIFICACIONALL');
            $table->string('TIPOALL');
            $table->string('TIPOFAM');
            $table->string('DETALLEALL');
            $table->string('PROFESION');
            $table->unsignedBigInteger('ID_REGISTRO');

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
        Schema::dropIfExists('transactions');
    }
}
