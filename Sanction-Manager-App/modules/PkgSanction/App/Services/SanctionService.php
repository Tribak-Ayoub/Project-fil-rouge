<?php

namespace Modules\App\Servive;

use Modules\PkgSanction\App\Models\SanctionAbsence;

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
}