<?php

namespace Modules\PkgSanction\App\Models;

use App\Models\Absence;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanctionAbsence extends Model
{
    use HasFactory;

    protected $table = 'sanction_absences';

    protected $fillable = [
        'regle_de_sanction_id',
        'date_debut',
        'date_fin',
    ];

    public function regle()
    {
        return $this->belongsTo(RegleDeSanction::class, 'regle_de_sanction_id');
    }

    public function absences()
    {
        return $this->belongsToMany(
            Absence::class,
            'absence_sanction_absence',
            'sanction_absence_id',
            'absence_id'
        )->withTimestamps();
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'sanction_absence_id');
    }
}
