<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    public function epreuves()
    { 
        return $this->hasMany(Epreuve::class); 
    }
}
