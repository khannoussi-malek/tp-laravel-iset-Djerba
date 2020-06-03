<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class epreuve extends Model
{
    public function Matiere()
    {
        return $this->belongsTo('App\Matiere');
    }


    



}
