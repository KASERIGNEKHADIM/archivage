<?php

namespace App\Models;

use App\Models\Piece;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nationalite extends Model
{
    use HasFactory;
    protected $fillable = ['nationalite'];
    public function etudiants(): HasMany
    {
        return $this->hasMany(Etudiant::class);
    }
/**
 * Get all of the pieces for the Nationalite
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function pieces(): HasMany
{
    return $this->hasMany(Piece::class);
}
}
