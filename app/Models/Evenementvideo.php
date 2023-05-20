<?php

namespace App\Models;

use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenementvideo extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'title_en',
        'video',
        'evenement_id'
    ];
    public function evenement() {
        return $this->BelongsTo(Evenement::class);
    }
    
}