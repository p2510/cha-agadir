<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'surname',
        'statut',
        'etablissement',
        'country',
        'departement',
        'competence',
        'poste',
        'email',
        'phone',
        'photo',
        'gsm'
    ];
    public function getRouteKeyName()
    {
        return 'name';
    }
}