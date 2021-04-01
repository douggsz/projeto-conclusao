<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisualizacaosTable extends Migration
{
    public function up()
    {
        Schema::create('visualizacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('usuario_id');
            $table->foreignId('conteudo_id');
            $table->boolean('like')->default(false);
            $table->boolean('dislike')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('visualizacaos');
    }
}
