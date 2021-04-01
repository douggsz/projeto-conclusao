<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visualizacao extends Model
{
    use HasFactory;
    use SoftDeletes;

    //Muitos usuarios podem visualizar
    public function usuario()
    {
        return $this->hasMany('App\Models\Usuario');
    }

    //Muitos conteudos podem ser visulizados
    public function conteudo(){
        return $this->belongsTo('App\Models\Conteudos');
    }
}
