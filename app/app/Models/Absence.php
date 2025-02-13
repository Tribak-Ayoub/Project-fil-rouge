<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $fillable = ['apprenant_id', 'seance_id'];

    public function apprenant() {
        return $this->belongsTo(User::class, 'apprenant_id');
    }

    public function seance() {
        return $this->belongsTo(Seance::class, 'seance_id');
    }

    public function justification() {
        return $this->hasOne(JustificationAbsence::class);
    }
}
