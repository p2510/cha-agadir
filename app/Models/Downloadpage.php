<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Downloadpage extends Model
{
    use HasFactory;
    protected $fillable=[
        'file',
        'filename',
        'pagename',
        'filename_en'
    ];
}