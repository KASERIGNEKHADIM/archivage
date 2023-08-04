<?php

namespace App\Models;

use App\Models\Piece;
use App\Models\Nationalite;
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
public function pieces(){
    return $this->hasMany(Piece::class);
}
}
