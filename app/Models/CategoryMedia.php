<?php

namespace App\Models;

use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryMedia extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    
    public function media()
    {
        return $this->hasMany(Media::class, 'category_media_id', 'id');
    }

}