<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function marca(){
        return $this->belongsTo(Marca::class);
    }
}
