<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function Clients(){
        $Clients = User::with('Subscript', 'Applications')->orderBy('id', 'desc')->paginate(10);
        // return view('reports.index');
        // dd($Clients);
        return view('reports.clinets' , compact('Clients'));
    }

        public function subscription()
        {
            $Packages = Package::with('Subscription')->get();
            return view('reports.subscription',compact('Packages'));
        }
}
