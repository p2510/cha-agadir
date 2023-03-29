<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Interested extends Model
{
    use HasFactory;
    protected $fillable=[
'gender',
'name',
'surname', 
'email',
'country',
'province',
'level',
'phone',
'grade',
'accepted',
'degree_name',
'course_id'
    ];

    /**
     * Get the course that owns the Interested
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    protected $casts=[
        'birth'=>'date'
    ];
}