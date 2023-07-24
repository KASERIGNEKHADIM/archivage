<?php

namespace App\Http\Controllers;

use App\Models\Nationalite;
use Illuminate\Http\Request;

class NationaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nationalites=Nationalite::all();
        $titre='Listes des nationalites';
        return view('nationalites.index',compact('nationalites','titre'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $titre='Ajouter une nationalité';
        $nationalites=Nationalite::all();
        return view('nationalites.create',compact('titre','nationalites'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $nationalites=Nationalite::create($request->all());
        return redirect()->route('nationalites.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $nationalites=Nationalite::find($id);
        $titre='Détails';
        return view('nationalites.show',compact('nationalites','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $nationalites=Nationalite::find($id);
        $titre='Modifier l Nationalite';
        return view('nationalites.edit',compact('nationalites','titre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $nationalites=Nationalite::find($id);
        $nationalites->update($request->all());
        return redirect()->route('nationalites.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $nationalites=Nationalite::find($id);
        $nationalites->delete();
        return redirect()->route('nationalites');
    }
}
