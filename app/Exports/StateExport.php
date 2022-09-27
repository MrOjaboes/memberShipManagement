<?php

namespace App\Exports;

use App\Models\State;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StateExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
            return view('Exports.state',[
            'states' => State::all()
        ]);
    }
}
