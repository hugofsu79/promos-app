<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|min:4|max:25'
        ]);
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $eleve)
    {
        return view('eleves/edit', ['eleve' => $eleve]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eleve $eleve)
    {
        $request->validate([
            'nom'        => ['required', 'min:4', 'max:25'],
            'prenom'     => ['required', 'min:4', 'max:25'],
            'age'        => ['required', 'numeric', 'min:1', 'max:100'],
        ]);

        $eleve->update(([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age
        ]));
        return redirect()->back()->with('message', 'l\'élève est modifié (pas physiquement bien sûr...)');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return redirect()->back()->with('message', 'l\'élève est supprimé (pas physiquement bien sûr...)');
    }
}
