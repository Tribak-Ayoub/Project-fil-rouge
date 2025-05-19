<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $table = 'seances';

    protected $fillable = [
        'duree_seance_id',
    ];

    public function duree()
    {
        return $this->belongsTo(DureeSeance::class, 'duree_seance_id');
    }

    public function absences()
    {
        return $this->hasMany(Absence::class, 'seance_id');
    }
}
