<?php

namespace App\Models;

use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EvenementInterested extends Model
{
    use HasFactory;
    protected $fillable=[
       
        'name', 'activity','email','phone','organism','poste','country','province','accepted','evenement_id'
    ];
    public function evenement() {
        return $this->BelongsTo(Evenement::class);
    }
    
}