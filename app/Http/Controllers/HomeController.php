<?php

namespace App\Http\Controllers;

use App\Models\Diplome;
use App\Models\Eleve;
use App\Models\Formateur;
use App\Models\Promo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $diplomes = Diplome::all();
        $eleves = Eleve::all();
        $formateurs = Formateur::all();
        $promos = Promo::all();


        return view('welcome', [
            'diplomes'     => $diplomes,
            'eleves'      => $eleves,
            'formateurs'        => $formateurs,
            'promos' => $promos
        ]);
    }
}
