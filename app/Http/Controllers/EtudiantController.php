<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index () {

        $etudiants = Etudiant::orderBy('id' , 'asc')->paginate(10);
        return view('listeE' , compact('etudiants'));
    }

    public function create () {
        return view('ajoutE');
    }

    public function store (Request $request) {
        $request->validate([

            'nomE' => 'required',
            'prenomE' => 'required',
            'date_naissance' => 'required',
            'numeroE' => 'required',
            'emailE' => 'required',
            'date_debut' => 'required',
        ]);
        Etudiant::create($request->all());
        return redirect()->route('etudiant.liste')->with('success' , 'Etudiant ajouté avec succès');
    }

    public function delete (Etudiant $etudiant) {

        $nom_complet = $etudiant->nom . '' . $etudiant->prenom;
        $etudiant->delete();

        return redirect()->route('etudiant.liste')->with('success' , 'Etudiant ' . $nom_complet . ' supprimé avec succès');

    }

    public function edit (Etudiant $etudiant) {
        return view('editEtudiant' , compact('etudiant'));
    }

    public function update (Request $request , Etudiant $etudiant   )
    {
        $request->validate([
            'nomE' => 'required',
            'prenomE' => 'required',
            'date_naissance' => 'required',
            'numeroE' => 'required',
            'emailE' => 'required',
            'date_debut' => 'required',
        ]);
    
        $etudiant->update($request->all());
        return redirect()->route('etudiant.liste')->with('success' , 'Etudiant modifié avec succès');
    }

    
 
}
