<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories=Categorie::all();
        $titre="Listes des catégories";
        return view('categories.index',compact('categories','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $titre='Ajouter une catégorie';
        return view('categories.create',compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $categories=Categorie::create($request->all());
        return redirect()->route('categories.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $categorie=Categorie::find($id);
        $titre='Détails de la catégorie ';
        return view('categories.show',compact('categorie','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $categorie=Categorie::find($id);
        $titre='Modifier la catégorie ';
        return view('categories.edit',compact('categorie','titre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $categorie=Categorie::find($id);
        $categorie->update($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categorie=Categorie::find($id);
        $categorie->delete();
        return redirect()->route('categories.index');
    }
}
