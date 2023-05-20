<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagevideo extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'title_en',
        'video',
        'pagename'
    ];
    
}