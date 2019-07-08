<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colecionavel extends Model
{
    protected $fillable = [ 'nome', 'linha', 'tema', 'edicao', 'status_prod', 'cor_cabelo', 'cor_olhos', 'cor_vestimentas'];
}
