<?php

namespace App\Http\Controllers;
use App\Models\Piece;
use App\Models\Document;
use App\Models\Etudiant;
use App\Models\Categorie;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $documents=Document::all();

        $titre='Listes des documents';
        return view('documents.index',compact('documents','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $titre='Ajouter un document';
        $categories=Categorie::all();
        $etudiants=Etudiant::all();
        $pieces=Piece::all();
        return view('documents.create',compact('titre','categories','etudiants','pieces'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $data=$request->all();
        $data['chemin']=$request->chemin->store('cours');
        $documents=Document::create($data);
        return redirect()->route('documents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $document=Document::find($id);
        $titre='Consultation du document';
        return view('documents.show',compact('document','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $document=Document::find($id);
        $titre='Modification du document';
        return view('documents.edit',compact('document','titre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $document=Document::find($id);
        $document->update($request->all());
        return redirect()->route('documents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $document=Document::find($id);
        $document->delete();
        return redirect()->route('documents.index');
    }
}
