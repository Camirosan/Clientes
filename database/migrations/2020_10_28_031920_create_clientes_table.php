<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        

        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('nombre');
            $table->string('correo');
            $table->string('telefono');
            $table->string('celular');
            $table->boolean('whatsapp');
            $table->timestamps();
        });

        Schema::create('direccions', function (Blueprint $table) {
            $table->id('id');
            $table->text('direccion');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id_cliente')->on('clientes');
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
        Schema::dropIfExists('clientes');
        Schema::dropIfExists('direccions');
    }
}
