<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agence;
use App\Models\Propriete;

class AgenceController extends Controller
{
    public function index()
    {
        $agences = Agence::all();
        return view('agence.index', compact('agences'));
    }

    public function create()
    {
        $proprietes = Propriete::all();
        return view('agence.create', compact('proprietes'));
        
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'propriete_id' => 'required'
        ]);

        $agence = new Agence();
        $agence->nom = $request->nom;
        $agence->adresse = $request->adresse;
        $agence->propriete_id = $request->propriete_id;
        $agence->save();
        return redirect('/agences');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $agence = Agence::findOrFail($id);
        $proprietes = Propriete::all();
        return view('agence.edit', compact('agence', 'proprietes'));
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'propriete_id' => 'required'
        ]);
        Agence::whereId($id)->update($validation);

        return redirect('/agences');
    
    }

    public function destroy($id)
    {
        $agence = Agence::findOrFail($id);
        $agence ->delete();
        return redirect('/agences');
    }
}