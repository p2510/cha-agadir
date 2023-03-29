<?php

namespace App\Models;


use App\Models\Mediavideo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryVideo extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    
    public function media()
    {
        return $this->hasMany(Mediavideo::class, 'category_mediavideo_id', 'id');
    }
}