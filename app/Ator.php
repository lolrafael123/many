<?php

namespace App;
use App\Filme;

use Illuminate\Database\Eloquent\Model;


class Ator extends Model
{

    protected $fillable = [
        'nome',
        'ano'
        
        
    ];

    public function filmes() {
        return $this->belongsToMany(Filme::class,'ator_filme','ator_id','filme_id');
        return $this->morphToMany(Filme::class);
    }
}
