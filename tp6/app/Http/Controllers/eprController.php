<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Epreuve;
use App\matiere;

class eprController extends Controller
{
    function affiche(){
        //$epr= DB::table('epreuve')->get();
        $epr = Epreuve::all();
        return view('affepr')->with('data',$epr);
    }
    function formhtml(){
        $data = DB::table('matieres')->select('id','Libelle')->get();
        $dataepr = DB::table('epreuves')->select('*')->get();
        $alldata = [
            'data'  => $data,
            'dataepr'   => $dataepr
        ];
        return view('addeprev')->with($alldata);
    }
    function form(){
        $data = request()->validate([
           'datepreuve' => 'required',
           'lieu' => 'required',
           'matiere_id' => 'required',
           'numepreuve' => 'required'
        ]);
       $mat= new Epreuve;
       $mat->datepreuve=request('datepreuve');
       $mat->lieu=request('lieu');
       $mat->matiere_id=request('matiere_id');
       $mat->numepreuve=request('numepreuve');
       $mat->save(); 
       $data = DB::table('matieres')->select('id','Libelle')->get();
        $dataepr = DB::table('epreuves')->select('*')->get();
       $alldata = [
        'data'  => $data,
        'dataepr'   => $dataepr
        ];
         return view('addeprev')->with($alldata);
    }
}
