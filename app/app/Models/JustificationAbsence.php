<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JustificationAbsence extends Model
{
    protected $fillable = ['absence_id', 'justif_absence', 'is_valid'];

    public function absence() {
        return $this->belongsTo(Absence::class, 'absence_id');
    }
}
