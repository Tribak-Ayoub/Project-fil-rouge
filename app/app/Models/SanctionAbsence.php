<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SanctionAbsence extends Model
{
    protected $fillable = ['date_debut', 'statut', 'apprenant_id', 'regle_id'];

    public function apprenant() {
        return $this->belongsTo(User::class, 'apprenant_id');
    }

    public function regle() {
        return $this->belongsTo(ReglesDeSanction::class, 'regle_id');
    }

    public function notifications() {
        return $this->hasMany(Notification::class);
    }
}
