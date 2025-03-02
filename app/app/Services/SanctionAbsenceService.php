<?php

namespace App\Services;

use App\Models\Absence;
use App\Models\ReglesDeSanction;
use App\Models\SanctionAbsence;
use App\Models\User;

class SanctionAbsenceService
{
    public function getSanctionAbsences()
    {
        return SanctionAbsence::with('apprenant', 'regle')->get();
    }

    public function countSanctionAbsence()
    {
        return SanctionAbsence::count();
    }

    public function countApprenants()
    {
        return User::role('apprenant')->count();
    }

    public function countAbsencesUnjustified()
    {
        return Absence::where('is_justified', 0)->count();
    }

    public function getSanctionChartData()
    {
        $sanctionAbsenceCount = ReglesDeSanction::select('penalite')
            ->leftJoin('sanction_absences', 'sanction_absences.regle_id', '=', 'regles_de_sanctions.id')
            ->selectRaw('penalite, COUNT(sanction_absences.id) as count')
            ->groupBy('penalite')
            ->get();

        $sanctionChartData = [];
        foreach ($sanctionAbsenceCount as $sanction) {
            $sanctionChartData[] = [
                'penalite' => $sanction->penalite,
                'value' => $sanction->count,
            ];
        }

        return $sanctionChartData;
    }

    public function getAbsenteismChartData()
    {
        $absenceCount = Absence::selectRaw('MONTH(created_at) as month, is_justified, COUNT(id) as count')
            ->groupBy('month', 'is_justified')
            ->orderBy('month')
            ->get();

        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        // Initialize arrays for both types of absences
        $justifiedData = array_fill(0, 12, 0);
        $unjustifiedData = array_fill(0, 12, 0);

        foreach ($absenceCount as $absence) {
            if ($absence->is_justified) {
                $justifiedData[$absence->month - 1] = $absence->count;
            } else {
                $unjustifiedData[$absence->month - 1] = $absence->count;
            }
        }

        return [
            "labels" => $months,
            "justified" => $justifiedData,
            "unjustified" => $unjustifiedData,
        ];
    }
}
