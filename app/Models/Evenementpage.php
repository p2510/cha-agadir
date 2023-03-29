<?php

namespace App\Models;

use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenementpage extends Model
{
    use HasFactory;
    protected $fillable=[
        'file',
        'filename',
        'evenement_id'
    ];
    public function evenement() {
        return $this->BelongsTo(Evenement::class);
    }
}