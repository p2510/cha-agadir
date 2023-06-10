<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        /**
     * Get all of the courses for the Responsable
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function course(): HasMany
    {
        return $this->hasMany(Course::class, 'team_id', 'id');
    }
}