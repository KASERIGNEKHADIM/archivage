<?php

namespace App\Models;
use App\Models\Niveau;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'nationalite',
        'niveau_id',
    ];

/**
 * Get the user that owns the Etudiant
 *
 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function niveau(): BelongsTo
{
    return $this->belongsTo(Niveau::class, 'niveau_id');
}
}



