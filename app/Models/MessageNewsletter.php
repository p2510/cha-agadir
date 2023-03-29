<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageNewsletter extends Model
{
    use HasFactory;
    protected $fillbale=[
        'subject','message'
    ];
}