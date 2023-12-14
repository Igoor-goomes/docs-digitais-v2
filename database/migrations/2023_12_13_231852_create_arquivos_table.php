<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArquivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquivo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('documento_id');
            $table->foreign('documento_id')->references('id')->on('documento');
            $table->string('arq_endereco', 100);
            $table->string('arq_tipo', 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arquivo');
    }
}
