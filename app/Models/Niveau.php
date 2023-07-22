<?php

namespace App\Models;


use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Niveau extends Model
{
    use HasFactory;
    protected $fillable = ['libelle','annee_scolaire'];
    public function etudiants(): HasMany
    {
        return $this->hasMany(Etudiant::class);
    }

}


