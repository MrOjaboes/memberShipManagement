<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\EventRegister;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function exportPdf($id)
    {
        $members = DB::table('event_registers')
        ->where('event_id', '=',$id)->get();
        $pdf = PDF::loadView('Pdf.leaders',compact('members'));
        return $pdf->download('attendants.pdf');
    }
    public function exportGeneralPdf($id)
    {
        $members = DB::table('event_registers')
        ->where('event_id', '=',$id)->get();
        $pdf = PDF::loadView('Pdf.leaders',compact('members'));
        return $pdf->download('leaders.pdf');
    }
}
