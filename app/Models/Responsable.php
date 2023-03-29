<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Responsable extends Model
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
    /**
     * Get all of the courses for the Responsable
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function course(): HasMany
    {
        return $this->hasMany(Course::class, 'responsable_id', 'local_key');
    }
}