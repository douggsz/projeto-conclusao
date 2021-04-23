<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    //User publica muitos conteudos
    public function conteudo()
    {
        return $this->hasMany('App\Models\Conteudo');
    }

    //User pode visualizar varios conteudos
    public function visualizacao()
    {
        return $this->belongsToMany('App\Visualizacao');
    }

    //User possui um tipo
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo_usuario');
    }
}
