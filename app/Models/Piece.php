<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'description','nationalite_id'];
    /**
     * Get the nationalite that owns the Piece
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nationalite(): BelongsTo
    {
        return $this->belongsTo(Nationalite::class, 'nationalite_id',);
    }
}
