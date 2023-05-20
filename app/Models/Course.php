<?php

namespace App\Models;


use App\Models\Mode;
use App\Models\Degree;
use App\Models\Program;
use App\Models\Download;
use App\Models\Language;
use App\Models\Location;
use App\Models\Modality;
use App\Models\Coursepage;
use App\Models\Interested;
use App\Models\Responsable;
use App\Models\TrainingType;
use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Traits\RendersContent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $contentColumn = 'content';
    protected $fillable=[
        'position',
        'name',
        'photo',
        'description',
        'duration',
        'admission',
        'dossier',
        'candidature',
        'datelimite',
        'selection',
        'daterentrer',
        'grade',
        'profile',
        'opportunity',
        'reviews',
        'accroche',
    ];
    public function getRouteKeyName()
    {
        return 'name';
    }
    public function degree() {
        return $this->BelongsTo(Degree::class);
    }

    public function modality() {
        return $this->BelongsTo(Modality::class);
    }

    public function mode() {
        return $this->BelongsTo(Mode::class);
    }

    public function location() {
        return $this->BelongsTo(Location::class);
    }

    public function language() {
        return $this->BelongsTo(Language::class);
    }

    public function programs() {
        return $this->hasMany(Program::class);
    }
    /**
     * Get the responsable that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function responsable(): BelongsTo
    {
        return $this->belongsTo(Responsable::class);
    }
    public function trainingType()
    {
        return $this->belongsTo(TrainingType::class);
    }
    
    public function downloads() {
        return $this->hasMany(Download::class);
    }

    /**
     * Get all of the interested for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
   
     
    public function interesteds()
    {
        return $this->hasMany(Interested::class, 'course_id', 'local_key');
    }

    public function coursepages() {
        return $this->hasMany(Coursepage::class);
    }

    protected $casts = [
        'datelimite' => 'datetime',
        'daterentre' => 'date',
    ];



  
}