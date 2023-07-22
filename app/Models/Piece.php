<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Piece extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'description','nationalite_id'];

    public function nationalite(): BelongsTo
{
    return $this->belongsTo(Nationalite::class, 'nationalite_id');
}
}
