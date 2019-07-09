<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = ['colecionavel_id', 'user_id', 'valor', 'estado', 'imagem'];

    public function colecionavel(){

        return $this->belongsTo('App\Colecionavel');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }
}
