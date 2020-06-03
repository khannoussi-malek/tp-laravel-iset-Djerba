<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epreuve extends Model
{
    public function matiere()
    { 
        return $this->belongsTo(Matiere::class); 
    }
}
