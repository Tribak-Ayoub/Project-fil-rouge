<?php

namespace Modules\PkgSanction\App\Models;

use App\Models\Absence;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanctionAbsencePrevisionnelle extends Model
{
    use HasFactory;

    protected $table = 'sanction_absence_previsionnelles';

    protected $fillable = [
        'regle_de_sanction_id',
    ];

    public function regle()
    {
        return $this->belongsTo(RegleDeSanction::class, 'regle_de_sanction_id');
    }

    public function absences()
    {
        return $this->belongsToMany(
            Absence::class,
            'absence_sanction_absence_previsionnelle',
            'sanction_absence_previsionnelle_id',
            'absence_id'
        )->withTimestamps();
    }
}
