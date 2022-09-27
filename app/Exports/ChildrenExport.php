<?php

namespace App\Exports;

use App\Models\Children;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ChildrenExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $children = Children::with(['class','age_range'])->orderBy('created_at','DESC')->get();
            return view('Exports.children',compact('children'));
    }
}
