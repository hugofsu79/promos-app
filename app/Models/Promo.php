<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
    ];

    public function eleves()
    {
        return $this->belongsToMany(Eleve::class);
    }
    public function diplomes()
    {
        return $this->hasMany(Diplome::class);
    }
}
