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
   function formhtml(){
      //$mat= DB::table('matieres')->get();
      $mat= Matiere::all();
       return view('addmatt')->with('data',$mat);
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
     function form(){
         $data = request()->validate([
            'Code' => 'required|max:5',
            'Libelle' => 'required',
            'Coefficient' => 'required|numeric|min:1|max:5'
         ]);
        $mat= new Matiere;
        $mat->Code=request('Code');
        $mat->Libelle=request('Libelle');
        $mat->Coefficient=request('Coefficient');
        $mat->save();
        $mat= Matiere::all();

        return view('addmatt')->with('data',$mat);

     }
     
}
