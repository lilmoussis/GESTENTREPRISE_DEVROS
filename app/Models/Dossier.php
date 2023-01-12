<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;
    protected $fillable=['libelle'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fichier(){
        return $this->hasMany(Fichier::class);
    }
    public function invitation()
    {
        return $this->hasMany(invitation::class);
    }
}
