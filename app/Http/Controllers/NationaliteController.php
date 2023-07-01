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
        $titre="liste des nationalités";
        $nationalites=Nationalite::all();
        return view('nationalites.index', compact("titre", "nationalites"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $titre='ajouter une nationalité';
        $nationalites=Nationalite::all();
        return view('nationalites.create',compact("titre","nationalites"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
