<?php

namespace App\Models;


use App\Models\Piece;
use App\Models\Etudiant;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ['nom','chemin','categorie_id','etudiant_id','piece_id'];

    /**
     * Get the categorie that owns the Document
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
    public function etudiant(): BelongsTo
    {
        return $this->belongsTo(Etudiant::class, 'etudiant_id');
    }
    public function piece(): BelongsTo
    {
        return $this->belongsTo(Piece::class, 'piece_id');
    }
}
