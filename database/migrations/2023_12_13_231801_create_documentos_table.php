<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento', function (Blueprint $table) {
            $table->id();
            $table->string('no_documento', 100)->unique();
            $table->unsignedBigInteger('tp_documento_id');
            $table->foreign('tp_documento_id')->references('id')->on('tp_documento');
            $table->unsignedBigInteger('setor_id');
            $table->foreign('setor_id')->references('id')->on('setor');
            $table->unsignedBigInteger('filial_id');
            $table->foreign('filial_id')->references('id')->on('filial');
            $table->string('doc_armario', 10);
            $table->string('doc_gaveta' , 10);
            $table->string('doc_pasta', 10);
            $table->date('dt_documento');
            $table->date('dt_registro');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento');
    }
}
