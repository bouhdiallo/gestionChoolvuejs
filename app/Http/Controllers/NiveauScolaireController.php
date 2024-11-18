<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NiveauScolaire;

class NiveauScolaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $niveauScolaires = NiveauScolaire::latest()->paginate(3);
        return Inertia("NiveauScolaire/IndexNiveauScolaire", [ 
            "niveauScolaires" =>$niveauScolaires
        ]);

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
        $request ->validate(["nom" => "required"]);

        NiveauScolaire::create([ "nom" => $request->nom]);

        return redirect()->back();

    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
