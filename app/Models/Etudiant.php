<?php

namespace App\Models;
use App\Models\Piece;
use App\Models\Niveau;
use App\Models\Document;
use App\Models\Nationalite;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'nationalite_id',
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
/**
 * Get the nationalite that owns the Etudiant
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function nationalite(): BelongsTo
{
    return $this->belongsTo(Nationalite::class, 'nationalite_id');
}
/**
 * Get all of the documents for the Etudiant
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function documents(){
    return $this->hasMany(Document::class);
}

public function piecesManquantes(){


        $ds=[];

        foreach ($this->documents as $d) {

            $ds[]=$d->piece_id;

        }
        $pieces=Piece::pluck('id')->toArray();
        $pm=array_diff($pieces,$ds);
        // dd($pm);
        $tpm= DB::table('pieces')
        ->whereIn('id', $pm)
        ->get()->toArray();
       // dd($tpm);
return $tpm;

}

}

