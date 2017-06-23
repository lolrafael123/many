<?php

namespace App;

use App\Ator;

use Illuminate\Database\Eloquent\Model;


class Filme extends Model
{
    protected $fillable = [
        'titulo',
        'descricao'

    ];

    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }

    public function atore()
    {
        return $this->belongsToMany(Ator::class,'ator_filme','ator_id','filme_id');
        return $this->morphToMany('App\Ator', 'ator_filme');
    }
}
