<?php

namespace Modules\PkgSanction\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegleDeSanction extends Model
{
    use HasFactory;

    protected $table = 'regles_de_sanctions';

    protected $fillable = [
        'titre',
        'description',
        'absences_max',
        'penalite',
        'seuil_de_notification',
        'duree',
        'note',
    ];

    public function sanctionAbsences()
    {
        return $this->hasMany(SanctionAbsence::class, 'regle_de_sanction_id');
    }

    public function previsionnelles()
    {
        return $this->hasMany(SanctionAbsencePrevisionnelle::class, 'regle_de_sanction_id');
    }
}
