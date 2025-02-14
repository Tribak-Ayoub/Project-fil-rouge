<?php

namespace App\Services;

use App\Models\SanctionAbsence;
use App\Models\User;

class SanctionAbsenceService
{
    public function getSanctionAbsences()
    {
        return SanctionAbsence::with('apprenant')->get();
    }

    public function countSanctionAbsence()
    {
        return SanctionAbsence::count();
    }

    public function countApprenants()
    {
        return User::role('apprenant')->count();
    }
}