<?php

namespace App\Services;

use App\Models\SanctionAbsence;

class SanctionAbsenceService
{
    public function getSanctionAbsences()
    {
        return SanctionAbsence::all();
    }

    public function countSanctionAbsence()
    {
        return SanctionAbsence::count();
    }
}