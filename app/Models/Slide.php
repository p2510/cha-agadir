<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slide extends Model
{
    use HasFactory;
    protected $fillable=[
        'subject',
        'title',
        'description',
        'photo',
        'url',
        'color',
        'color_mobile',
        'rang'
    ];


}