<?php

namespace App\Models;

use App\Models\CategoryVideo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mediavideo extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'video'
    ];
   public function vidéos()
    {
        return $this->belongsTo(CategoryVideo::class, 'category_video_id');
    }
}