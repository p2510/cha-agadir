<?php

namespace App\Models;

use App\Models\Tabimage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    /**
     * Get all of the tabimages for the Tabpage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tabimages(): HasMany
    {
        return $this->hasMany(Tabimage::class, 'tabpage_id', 'id');
    }
}