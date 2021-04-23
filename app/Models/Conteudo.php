<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conteudo extends Model
{
    use HasFactory;
    use SoftDeletes;

    //Cada conteudo pertence a um usuario
    public function usuario()
    {
        return $this->belongsTo('App\Models\User');
    }

    //Conteudo possui uma categoria
    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }

    //Cada conteudo possui varias visualizaçoes
    public function visualzação()
    {
        return $this->hasMany('App\Models\Visualizacao');
    }

    //Conteudo possui varias avaliações
    public function avaliacao()
    {
        return $this->hasMany('App\Models\Avaliacao');
    }
}
