<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proprietaire;

class ProprietaireController extends Controller
{
    public function index()
    {
        $proprietaires = Proprietaire::all();
        return view('proprietaire.index', compact('proprietaires'));
    }

    public function create()
    {
        return view('proprietaire.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'CNI' => 'required',
            'prenom' => 'required',
            'nom' => 'required',
            'telephone' => 'required',
            'sexe' => 'required',
            'adress' => 'required',
        ]);

        $proprietaire = new Proprietaire();
        $proprietaire->CNI = $request->CNI;
        $proprietaire->prenom = $request->prenom;
        $proprietaire->nom = $request->nom;
        $proprietaire->telephone = $request->telephone;
        $proprietaire->sexe = $request->sexe;
        $proprietaire->adress = $request->adress;
        $proprietaire->save();
        return redirect('/proprietaires');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $proprietaire = Proprietaire::findOrFail($id);
        return view('proprietaire.edit', compact('proprietaire'));
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'CNI' => 'required',
            'prenom' => 'required',
            'nom' => 'required',
            'telephone' => 'required',
            'sexe' => 'required',
            'adress' => 'required',
        ]);
        Proprietaire::whereId($id)->update($validation);

        return redirect('/proprietaires')->with('Vous avez bien modifier');
    }

    public function destroy($id)
    {
        $proprietaire = Proprietaire::findOrFail($id);
        $proprietaire ->delete();
        return redirect('/proprietaires')->with('La suppréssion est cool');
    }
}
