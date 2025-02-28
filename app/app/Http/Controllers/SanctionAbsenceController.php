<?php

namespace App\Http\Controllers;

use App\Models\SanctionAbsence;
use App\Services\SanctionAbsenceService;
use Illuminate\Http\Request;

class SanctionAbsenceController extends Controller
{
    protected $sanctionAbsenceService;

    public function __construct(SanctionAbsenceService $sanctionAbsenceService)
    {
        return $this->sanctionAbsenceService = $sanctionAbsenceService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sanctionAbsence = $this->sanctionAbsenceService->getSanctionAbsences();
        $countSanctionAbsence = $this->sanctionAbsenceService->countSanctionAbsence($sanctionAbsence);
        $countApprenants = $this->sanctionAbsenceService->countApprenants();
        $countAbsencesUnjustified = $this->sanctionAbsenceService->countAbsencesUnjustified();
        $sanctionChartData = $this->sanctionAbsenceService->getSanctionChartData();
        $absenteismChartData = $this->sanctionAbsenceService->getAbsenteismChartData();

        return view('/dashboard', compact('countSanctionAbsence', 'sanctionAbsence', 'countApprenants', 'countAbsencesUnjustified', 'sanctionChartData', 'absenteismChartData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SanctionAbsence $sanctionAbsence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SanctionAbsence $sanctionAbsence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SanctionAbsence $sanctionAbsence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SanctionAbsence $sanctionAbsence)
    {
        //
    }
}
