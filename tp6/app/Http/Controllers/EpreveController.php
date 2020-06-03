<?php

namespace App\Http\Controllers;
use App\Epreuve;
use App\Matiere;
use DB;
use Illuminate\Http\Request;

class EpreveController extends Controller
{  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $epr= Epreuve::all();
       $epr= DB::table('epreuves')
            ->join('matieres', 'matieres.id', '=', 'epreuves.matiere_id')
            ->select('epreuves.*', 'matieres.Libelle')
            ->get();
      return view('crud.affEpreve')->with('data',$epr);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       $data = DB::table('matieres')->select('id','Libelle')->get();
        
       return view("crud.addEpreve")->with('data',$data);
   }


   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
        $data = request()->validate([
            'datepreuve' => 'required',
            'lieu' => 'required',
            'matiere_id' => 'required',
            'numepreuve' => 'required'
        ]);
        $epre= new Epreuve;
        $epre->datepreuve=request('datepreuve');
        $epre->lieu=request('lieu');
        $epre->matiere_id=request('matiere_id');
        $epre->numepreuve=request('numepreuve');
        $epre->save(); 
     
        $epr= DB::table('epreuves')
        ->join('matieres', 'matieres.id', '=', 'epreuves.matiere_id')
        ->select('epreuves.*', 'matieres.Libelle')
        ->get();
  return view('crud.affEpreve')->with('data',$epr);
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
    $data = DB::table('matieres')->select('id','Libelle')->get();
    $dataepr = DB::table('epreuves')->where('id',$id)->select('*')->get();
    $alldata = [
    'data'  => $data,
    'dataepr'   => $dataepr
    ];
       $mat= Epreuve::find($id);
       return view('crud.editEpreve')->with('data',$alldata);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
    $data = request()->validate([
        'datepreuve' => 'required',
        'lieu' => 'required',
        'matiere_id' => 'required',
        'numepreuve' => 'required'
     ]);        
     $mat=Epreuve::find($id);
    $mat->datepreuve=request('datepreuve');
    $mat->lieu=request('lieu');
    $mat->matiere_id=request('matiere_id');
    $mat->numepreuve=request('numepreuve');
    $mat->save(); 
    $epr= Epreuve::all();
    $epr= DB::table('epreuves')
         ->join('matieres', 'matieres.id', '=', 'epreuves.matiere_id')
         ->select('epreuves.*', 'matieres.Libelle')
         ->get();
   return view('crud.affEpreve')->with('data',$epr);
       //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $epr= Epreuve::find($id);
       if($epr != null)
       $epr->delete();  
       
       $epr= DB::table('epreuves')
            ->join('matieres', 'matieres.id', '=', 'epreuves.matiere_id')
            ->select('epreuves.*', 'matieres.Libelle')
            ->get();
      return view('crud.affEpreve')->with('data',$epr);

       //
   }
}
