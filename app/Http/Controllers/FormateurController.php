<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */

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

    public function edit(Formateur $formateur)
    {
        return view('formateurs/edit', ['formateur' => $formateur]);
    }
}
