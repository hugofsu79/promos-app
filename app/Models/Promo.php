<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_debut',
        'date_fin',
        'diplome_id',
        'eleve_id',
    ];

    public function eleves()
    {
        return $this->belongsToMany(Eleve::class,'inscriptions');
    }
    public function diplome()
    {
        return $this->belongsTo(Diplome::class);
    }
}
