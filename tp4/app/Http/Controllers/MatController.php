<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\matiere;

class MatController extends Controller
{
    function affiche(){
        //$mat= DB::table('matieres')->get();
        $mat= Matiere::all();
         return view('affMat')->with('data',$mat);
     }
     
     function savematiere(){
        $add= new Matiere;
        $add->Code = 10; 
        $add->Libelle = 'LibelleLibelle'; 
        $add->Coefficient = 70; 
        $add->save() ; 
        $mat= Matiere::all();
        //dd($mat);
        redirect('/matiere');
     }
     
}
