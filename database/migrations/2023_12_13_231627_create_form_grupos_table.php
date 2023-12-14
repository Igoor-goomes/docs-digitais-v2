<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_grupo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('formulario_id');
            $table->foreign('formulario_id')->references('id')->on('formulario');
            $table->unsignedBigInteger('grupo_usuario_id');
            $table->foreign('grupo_usuario_id')->references('id')->on('grupo_usuario');
            $table->boolean('form_grupo_incluir');
            $table->boolean('form_grupo_atualizar');
            $table->boolean('form_grupo_excluir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_grupo');
    }
}
