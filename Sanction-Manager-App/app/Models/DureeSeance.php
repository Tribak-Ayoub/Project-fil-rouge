<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DureeSeance extends Model
{
    use HasFactory;

    protected $table = 'duree_seances';

    protected $fillable = [
        'duree_minutes',
    ];

    public function seances()
    {
        return $this->hasMany(Seance::class, 'duree_seance_id');
    }
}
