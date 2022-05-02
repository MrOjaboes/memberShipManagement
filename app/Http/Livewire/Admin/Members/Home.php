<?php

namespace App\Http\Livewire\Admin\Members;

use App\Models\User;
use App\Models\Profile;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
//use PDF;
use Illuminate\Support\Facades\DB;

class Home extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm = null;
    public function render()
    {

        // $users = User::query()
        // ->where('name','like','%'.$this->searchTerm.'%')
        // ->orWhere('email','like','%'.$this->searchTerm.'%')
        // ->latest()->paginate(5);
        $users = DB::table('users')
        ->where('user_type', '=',0)
        ->where(function ($query) {
            $query->where('email','like','%'.$this->searchTerm.'%')
                  ->orWhere('name','like','%'.$this->searchTerm.'%');
        })
        ->paginate(5);
        // $users = DB::table('users')
        //    ->where('name', '=', 'John')
        //    ->where(function ($query) {
        //        $query->where('votes', '>', 100)
        //              ->orWhere('title', '=', 'Admin');
        //    })
        //    ->get();
        // $searchResult = DB::table('users')
        // ->when($request->country, function ($query) use ($request) {
        //     $query->orWhere('country', $request->country);
        // })->when($request->name, function ($query) use ($request) {
        //     $query->orWhere('name', $request->name);
        // })->when($request->city, function ($query) use ($request) {
        //     $query->orWhere('city', $request->city);
        // });
             return view('livewire.admin.members.home',compact('users'));
       // $users = User::orderBy('created_at','DESC')->where('user_type',0)->paginate(5);

    }

    // public function generatePDF()
    // {
    //     $data = [
    //         'title' => 'Welcome to ItSolutionStuff.com',
    //         'date' => date('m/d/Y')
    //     ];

    //     $pdf = PDF::loadView('myPDF', $data);

    //     return $pdf->download('itsolutionstuff.pdf');
    // }
}
