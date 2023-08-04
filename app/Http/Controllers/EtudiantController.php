<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use App\Models\Document;
use App\Models\Etudiant;
use App\Models\Nationalite;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $etudiants=Etudiant::all();
        $titre='Listes des Etudiants';
    //$piecesAramener=$etudiant->nationalite->pieces();
    //$p=$etudiant->nationalite->pieces();



        return view('etudiants.index',compact('etudiants','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $titre='Ajouter un Etudiant';
        $niveaux=Niveau::all();
        $nationalites=Nationalite::all();
        $etudiants=Etudiant::all();
        return view('etudiants.create',compact('titre','niveaux','nationalites','etudiants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $etudiants=Etudiant::create($request->all());
        return redirect()->route('etudiants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $etudiant=Etudiant::find($id);
        $document=Document::find($id);
        $titre='Détails de l etudiant';
        return view('etudiants.show',compact('etudiant','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $etudiant=Etudiant::find($id);
        $titre='Modifier l etudiant';
        return view('etudiants.edit',compact('etudiant','titre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $etudiant=Etudiant::find($id);
        $etudiant->update($request->all());
        return redirect()->route('etudiants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $etudiant=Etudiant::find($id);
        $etudiant->delete();
        return redirect()->route('etudiants.index');

    }
}
