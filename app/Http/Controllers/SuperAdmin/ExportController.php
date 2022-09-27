<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Exports\LgaExport;
use App\Exports\AdultExport;
use App\Exports\StateExport;
use Illuminate\Http\Request;
use App\Exports\ChildrenExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportMembers()
    {
        return Excel::download(new AdultExport(), 'members.xlsx');
    }
    public function exportchildren()
    {
        return Excel::download(new ChildrenExport(), 'children.xlsx');
    }
    public function exportlga()
    {
        return Excel::download(new LgaExport(), 'local-govt.xlsx');
    }
    public function exportstate()
    {
        return Excel::download(new StateExport(), 'state.xlsx');
    }
}
