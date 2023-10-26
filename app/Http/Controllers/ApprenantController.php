<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $apprenants=Apprenant::paginate(4);
            return view('apprenants.index',compact('apprenants'));
        }
     
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('apprenants.ajout');
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
                'nom'=>'required',
                'prenom'=>'required',
                'telephone'=>'required',
                'email'=>'required',
                'password'=>'required',

    
            ]);
            $apprenant=new Apprenant();
            $apprenant->nom =$request->nom;
            $apprenant->prenom = $request->prenom;
            $apprenant->telephone = $request->telephone;
            $apprenant->email = $request->email;
            $apprenant->password =$request->password;
            $apprenant->save();
    
            return redirect('/apprenant')->with('status',"l'etudiant a bien été enregistrer");
    
    
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
            $etudiants=Apprenant::find($id);
            return view('etudiant.update',compact('etudiants'));
        }
        public function update_traitement(Request $request)
        {
            $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe'=>'required',
    
            ]);
            $cour=Cour::find($request->id);
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
            $etudiant=Cour::find($id);
            $etudiant->delete();
            return redirect('/etudiant')->with('status',"l'etudiant a bien été suprimer");
        }
    }

