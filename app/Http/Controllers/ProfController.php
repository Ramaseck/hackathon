<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $professeurs=Professeur::paginate(4);
            return view('profs.index',compact('professeurs'));
        }
     
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('profs.ajout');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            // 
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'matiere'=>'required',
    
            ]);
            $professeurs=new Professeur();
            $professeurs->name =$request->name;
            $professeurs->email = $request->email;
            $professeurs->matiere =$request->matiere;
            $professeurs->save();
    
            return redirect('/prof')->with('status',"le prof a bien été enregistrer");
    
    
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show()
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
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update( $id)
        {
            // mettre  a jour
            $etudiants=Professeur::find($id);
            return view('etudiant.update',compact('etudiants'));
        }
        public function update_traitement(Request $request)
        {
            $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe'=>'required',
    
            ]);
            $cour=Professeur::find($request->id);
            $cour->nom =$request->nom;
            $cour->prenom = $request->prenom;
            $cour->classe =$request->classe;
            $cour->update();
    
            return redirect('/etudiant')->with('status',"l'etudiant a bien été modifieree");
        }
    
    
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $etudiant=Professeur::find($id);
            $etudiant->delete();
            return redirect('/etudiant')->with('status',"l'etudiant a bien été suprimer");
        }
    }
    

