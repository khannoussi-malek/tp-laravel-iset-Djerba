<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Epreuve;

class eprController extends Controller
{
    function affiche(){
        //$epr= DB::table('epreuve')->get();
        $epr = Epreuve::all();
        return view('affepr')->with('data',$epr);
    }
}
