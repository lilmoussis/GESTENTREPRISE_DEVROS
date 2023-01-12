<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    use HasFactory;
    protected $fillable=[
        'libelle',
        'path',
        'user_id',
        'dossier_id',
    ];
    public function dossier(){
        return $this->belongsTo(Dossier::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function invitation()
    {
        return $this->hasMany(invitation::class);
    }
}
