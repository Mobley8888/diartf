<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Etudiant;
class EtudiantController extends Controller

// Ensembles des controller
{
    // Controller pour afficher la liste des inscripts dans la base
    public function Liste_etudiant()
    {
        $etudiants=Etudiant::all();
        return view ('etudiant.liste', compact('etudiants'));

    }
    //Controller pour ajouter des etudiants dans la base de données
    public function Ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }
    // Controller pour l'ajout des données
    public function Ajouter_etudiant_traitement(Request $request )
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'option'=>'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant-> nom= $request->nom;
        $etudiant-> prenom= $request->prenom;
        $etudiant-> option= $request->option;
        $etudiant->save();

        return redirect('/ajouter')->with ('status','L\'ajout à bien été réalisé avec succès!');

    }
    // Controller pour la mise à jour
    public function update_etudiant($id){
        $etudiants= Etudiant::find($id);
       return view ('etudiant.update', compact('etudiants'));
    }
    
    // Controller pour la modification des données
    public function update_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'option'=>'required',
        ]);

        $etudiant = Etudiant::find ( $request->id);
        $etudiant-> nom= $request->nom;
        $etudiant-> prenom= $request->prenom;
        $etudiant-> option= $request->option;
        $etudiant->update();

        return redirect('/etudiant')->with ('status','Modification réalisé avec succès!');

    }
    public function delete_etudiant($id)
    {
        $etudiant=Etudiant::find($id);
        $etudiant-> delete();
        return redirect('/etudiant')->with ('status','Suppression réalisé avec succès!');
      
       
    }


}
