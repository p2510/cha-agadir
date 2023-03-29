<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Subtitle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tab extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function subtitles() {
        return $this->hasMany(Subtitle::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }
}