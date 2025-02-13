<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReglesDeSanction extends Model
{
    protected $fillable = ['titre', 'description', 'absences_max', 'penalite', 'seuil_de_notification', 'duree', 'note'];

    public function sanctions() {
        return $this->hasMany(SanctionAbsence::class, 'regle_id');
    }
}
