<?php

namespace App\Models;

use App\Models\Curriculum;
use App\Models\TrainingType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Degree extends Model
{
    use HasFactory;

    public function curriculum() {
        return $this->BelongsTo(Curriculum::class);
    }

    public function trainingType() {
        return $this->BelongsTo(TrainingType::class);
    }
    

    /**
     * Get all of the comments for the Degree
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

}