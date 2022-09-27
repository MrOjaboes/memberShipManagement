<?php

namespace App\Exports;

use App\Models\LocalGovernments;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LgaExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
            return view('Exports.lga',[
            'lga' => LocalGovernments::all()
        ]);
    }
}
