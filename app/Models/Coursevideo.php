<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coursevideo extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'title_en',
        'video',
        'course_id'
    ];
    public function course() {
        return $this->BelongsTo(Course::class);
    }
}