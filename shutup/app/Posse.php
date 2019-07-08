<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posse extends Model
{
    protected $fillable = ['user_id', 'colecionavel_id', 'valor', 'data'];

    public function colecionavel(){
        return $this->belongsTo('App\Colecionavel');
    }
}
