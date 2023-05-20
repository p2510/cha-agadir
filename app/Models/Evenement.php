<?php

namespace App\Models;

use App\Models\Evenementpage;
use App\Models\Evenementvideo;
use App\Models\EvenementInterested;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'start_at',
        'end_at',
        'location',
        'photo',
        'accroche',
        'active',
    ];
    public function getRouteKeyName()
    {
        return 'title';
    }
    protected $casts=[
        'start_at'=>'datetime',
        'end_at'=>'datetime',
    ];

    public function evenement_interesteds() {
        return $this->hasMany(EvenementInterested::class);
    }
    public function evenementpages() {
        return $this->hasMany(Evenementpage::class);
    }
    public function evenementvideos() {
        return $this->hasMany(Evenementvideo::class);
    }


}