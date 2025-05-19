<?php

namespace Modules\PkgSanction\App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Modules\App\Servive\SanctionService;
use Modules\Core\App\Controllers\BaseController;

class DashboardController extends BaseController
{
    protected $sanctionService;

    public function __construct(SanctionService $sanctionService)
    {
        $this->sanctionService = $sanctionService;
    }

    public function index()
    {
        dd($this->sanctionService->totalSanctionAbsence());

        return Inertia::render('PkgSanction::Dashboard', [
            'sanctionsAbsenceCount' => $this->sanctionService->totalSanctionAbsence()
        ]);
    }
}
