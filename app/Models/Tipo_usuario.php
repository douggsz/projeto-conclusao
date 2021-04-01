<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo_usuario extends Model
{
    use HasFactory;
    use SoftDeletes;

    //Varios usuarios possuem o mesmo tipo
    public function usuario()
    {
        return $this->belongsToMany('App\Models\Usuario');
    }
}
