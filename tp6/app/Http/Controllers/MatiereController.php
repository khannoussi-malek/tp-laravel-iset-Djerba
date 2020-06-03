<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matiere;
use App\Epreuve;
class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mat= Matiere::all();
       return view('crud.affMat')->with('data',$mat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("crud.addmatt");
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

        return view('crud.affMat')->with('data',$mat);
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
        $mat= Matiere::find($id);
        return view('crud.editMat')->with('data',$mat);

        //
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
            'Code' => 'required|max:5',
            'Libelle' => 'required',
            'Coefficient' => 'required|numeric|min:1|max:5'
         ]);
        $mat=Matiere::find($id);
        $mat->Code=request('Code');
        $mat->Libelle=request('Libelle');
        $mat->Coefficient=request('Coefficient');
        $mat->save();
        $mat= Matiere::all();

        return view('crud.affMat')->with('data',$mat);
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
        $mat= Matiere::find($id);
        $epr = Epreuve::where('matiere_id', '=', $id)->first();
        if ($epr === null) {
            $mat->delete();  
        }else{
            $message="le matiere ".$mat->Libelle." est lié a un Epreuve";
        }
        $mat= Matiere::all();
            return view('crud.affMat')->with(['data'=>$mat,'message'=>$message]);

        //
    }
}
