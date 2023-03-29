<?php

namespace App\Models;

use App\Models\CategoryMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'photo'
    ];
    public function media()
    {
        return $this->belongsTo(CategoryMedia::class, 'category_media_id');
    }

}