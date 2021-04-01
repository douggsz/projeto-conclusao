<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avaliacao extends Model
{
    use HasFactory;
    use SoftDeletes;

    //Cada avaliação pertence a um conteudo
    public function conteudo()
    {
        return $this->belongsTo('App\Models\Conteudo');
    }
}
