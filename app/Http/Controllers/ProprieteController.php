<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\Request;
use App\Models\Propriete;
use App\Models\Quartier;

class ProprieteController extends Controller
{
    
    public function index()
    {
        $proprietes = Propriete::all();
        return view('propriete.index', compact('proprietes'));
    }

    public function create()
    {
        $proprietaires = Proprietaire::all();
        $quartiers = Quartier::all();
        return view('propriete.create', compact('proprietaires', 'quartiers'));
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'surface' => 'required',
            'description' => 'required',
        ]);

        $propriete = new Propriete();
        $propriete->surface = $request->surface;
        $propriete->description = $request->description;
        $propriete->etat = $request->has('etat');
        $propriete->proprietaire_id = $request->proprietaire_id;
        $propriete->quartier_id = $request->quartier_id;
        $propriete->save();
        return redirect('/proprietes');
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

    public function edit($id)
    {
        $propriete = Propriete::findOrFail($id);
        $proprietaires = Proprietaire::all();
        $quartiers = Quartier::all();
        return view('propriete.edit', compact('propriete', 'proprietaires', 'quartiers'));
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'surface' => 'required',
            'description' => 'required',
        ]);
        Propriete::whereId($id)->update($validation);

        return redirect('/proprietes')->with('success', 'Game Data is successfully updated');

    }

    public function destroy($id)
    {
        $propriete = Propriete::findOrFail($id);
        $propriete->delete();

        return redirect('/proprietes')->with('success', 'Game Data is successfully deleted');
    }
}
