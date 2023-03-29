<?php

namespace App\Models;

use App\Models\Tab;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subtitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body'
    ];

    public function tab() {
        return $this->belongsTo(Tab::class);
    }

}