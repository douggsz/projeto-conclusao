<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory;
    use SoftDeletes;

    //Usuario publica muitos conteudos
    public function conteudo()
    {
        return $this->hasMany('App\Models\Conteudo');
    }

    //Usuario pode visualizar varios conteudos
    public function visualizacao()
    {
        return $this->belongsToMany('App\Visualizacao');
    }

    //Usuario possui um tipo
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo_usuario');
    }
}
