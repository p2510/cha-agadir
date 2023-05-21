<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabpage extends Model
{
    use HasFactory;
    protected $fillable=[
        'pagename',
        'title',
        'title_en',
        'content',
        'content_en',
    ];
}