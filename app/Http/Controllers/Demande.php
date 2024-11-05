<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demandes;

class DemandeController extends Controller

// Ensembles des controller pour la gestions des demandes
{
    // Controller pour afficher la liste des inscripts dans la base

    public function Liste_demandes()
    {
        $demandes=Demande::all();
        return view ('demande.liste', compact('demandes'));

    }
    //Controller pour ajouter des demandes dans la base de données
    public function Ajouter_demande()
    {
        return view('demande.ajouter');
    }
    // Controller pour l'ajout des données
    public function Ajouter_demande_traitement(Request $request )
    {
        $request->validate([
           'structure'=>'required',
            'service'=>'required',
            'agentdemandeur'=>'required',
            'objet'=>'required',
            'motif'=>'required',
        ]);

        $demandes = new Demande();
        $demandes-> structure= $request->structure;
        $demandes-> service= $request->service;
        $demandes-> agentdemandeur= $request->agentdemandeur;
        $demandes-> objet= $request->objet;
        $demandes-> motif= $request->motif;
        $demandes->save();

        return redirect('/ajouter')->with ('status','L\'ajout à bien été réalisé avec succès!');

    }
    // Controller pour la mise à jour
    public function update_demandes($id){
        $demandes= Demande::find($id);
       return view ('demande.update', compact('demandes'));
    }
    
    // Controller pour la modification des données

    public function update_demande_traitement(Request $request)
    {
        $request->validate([
            'structure'=>'required',
            'service'=>'required',
            'agentdemandeur'=>'required',
            'objet'=>'required',
            'motif'=>'required',
        ]);

        $demandes = Demande::find ( $request->id);
        $demandes-> structure= $request->demandes;
        $demandes-> service= $request->service;
        $demandes-> agentdemandeur= $request->agentdemandeur;
        $demandes-> objet= $request->objet;
        $demandes-> motif= $request->motif;
        $demandes->update();
        return redirect('/demandes')->with ('status','Modification réalisé avec succès!');

    }
    public function delete_demande($id)
    {
        $demandes=demandes::find($id);
        $demandes-> delete();
        return redirect('/demandes')->with ('status','Suppression réalisé avec succès!');
      
       
    }


}

