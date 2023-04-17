<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    use HasFactory;
    protected $fillable=[
        'active',
        'title',
        'title_en',
        'description',
        'description_en',
        'url',
        'file',
        'image',
    ];
}