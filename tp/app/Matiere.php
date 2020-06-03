<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    public function Epreuves()
    {
        return $this->hasMany('App\epreuve');
    }
}
