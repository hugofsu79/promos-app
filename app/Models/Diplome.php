<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
    ];
    
    public function formateurs()
    {
        return $this->belongsTo(Formateur::class);
    }
    public function promos()
    {
        return $this->hasMany(Promos::class);
    }
}

