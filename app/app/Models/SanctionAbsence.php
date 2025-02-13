<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SanctionAbsence extends Model
{
    protected $fillable = ['date_debut', 'statut', 'apprenant_id', 'regle_id'];
}
