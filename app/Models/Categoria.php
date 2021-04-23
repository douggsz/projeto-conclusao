<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory;
    use SoftDeletes;

    //Cada categoria possui varios conteudos
    public function conteudo()
    {
        return $this->belongsToMany('App\Models\Conteudo');
    }
}
