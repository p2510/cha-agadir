<?php

namespace App\Models;

use App\Models\Tabpage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tabimage extends Model
{
    use HasFactory;
    protected $fillable=[
        'photo',
        'tabpage_id'
    ];

    /**
     * Get the tabepage that owns the Tabimage
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tabpage(): BelongsTo
    {
        return $this->belongsTo(Tabpage::class, 'tabpage_id', 'id');
    }
}