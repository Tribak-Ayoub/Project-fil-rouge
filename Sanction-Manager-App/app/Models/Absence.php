<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    protected $table = 'absences';

    protected $fillable = [
        'user_id',
        'seance_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function seance()
    {
        return $this->belongsTo(Seance::class);
    }

    public function justifications()
    {
        return $this->hasOne(JustificationAbsence::class);
    }

    public function sanctionAbsences()
    {
        return $this->belongsToMany(
            SanctionAbsence::class,
            'absence_sanction_absence',
            'absence_id',
            'sanction_absence_id'
        )->withTimestamps();
    }

    public function previsionnelles()
    {
        return $this->belongsToMany(
            SanctionAbsencePrevisionnelle::class,
            'absence_sanction_absence_previsionnelle',
            'absence_id',
            'sanction_absence_previsionnelle_id'
        )->withTimestamps();
    }
}
