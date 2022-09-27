<?php

namespace App\Exports;

use App\Models\Adult;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;


class AdultExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        $members = Adult::with(['age_range','church','address','fgroup','fcentre','fngroup'])->orderBy('created_at','DESC')->get();
            return view('Exports.adult',compact('members'));
    }
}
