<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $niveaux=Niveau::all();
        $titre='Listes des niveaux';
        return view('niveaux.index', compact('niveaux','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $niveaux=Niveau::all();
        $titre='Inserer un niveau';
        return view('niveaux.create', compact('niveaux','titre'));
    }





    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $niveaux=Niveau::create($request->all());
        return redirect()->route('niveaux.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $niveaux=Niveau::find($id);
        $titre='Details du niveau';
        return view('niveaux.show', compact('niveaux','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $niveaux=Niveau::find($id);
        $titre='Editer un niveau';
        return view('niveaux.edit', compact('niveaux','titre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $niveaux=Niveau::find($id);
        $niveaux->update($request->all());
        return redirect()->route('niveaux.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $niveaux=Niveau::find($id);
        $niveaux->delete();
        return redirect()->route('niveaux.index');
    }
}
