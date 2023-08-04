<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use App\Models\Nationalite;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        # code...
        $pieces=Piece::all();
        $titre="Listes des pieces";
        return view('pieces.index',compact('pieces','titre'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pieces=Piece::all();
        $nationalites=Nationalite::all();
        $titre='Inserer une piece';
        return view('pieces.create', compact('pieces','nationalites','titre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pieces=Piece::create($request->all());
        return redirect()->route('pieces.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pieces=Piece::find($id);
        $titre='Détails de la piece ';
        return view('pieces.show',compact('pieces','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $piece=Piece::find($id);
        $titre='Modification d une  piece';
        return view('pieces.edit',compact('piece','titre'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $pieces=Piece::find($id);
        $pieces->update($request->all());
        return redirect()->route('pieces.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $piece=Piece::find($id);
        $piece->delete();
        return redirect()->route('pieces.index');
    }
}
