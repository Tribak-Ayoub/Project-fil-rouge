<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable = ['DateSeance'];

    public function absences() {
        return $this->hasMany(Absence::class, 'seance_id');
    }
}
