<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConteudosTable extends Migration
{
    public function up()
    {
        Schema::create('conteudos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('url');
            $table->string('descricao');
            $table->foreignId('user_id');
            $table->foreignId('categoria_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('conteudos');
    }
}
