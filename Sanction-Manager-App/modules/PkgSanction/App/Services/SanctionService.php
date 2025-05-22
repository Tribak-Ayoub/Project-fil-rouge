<?php

namespace Modules\PkgSanction\App\Services;

use Modules\PkgSanction\App\Models\SanctionAbsence;
use Modules\PkgSanction\App\Models\SanctionAbsencePrevisionnelle;

class SanctionService
{
    public function getRecentSanctions()
    {
        return SanctionAbsence::with('RegleDeSanction');
    }

    public function totalSanctionAbsence()
    {
        return SanctionAbsence::count();
    }

    public function totalSanctionAbsencePrevisionnelle()
    {
        return SanctionAbsencePrevisionnelle::count();
    }
}