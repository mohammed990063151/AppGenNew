<?php

namespace App\Http\Controllers\front;
use App\Models\app;
use App\Models\FirebaseNotification;
use App\Models\Ticketmassege;
use App\Models\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class FrontController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;



    public function index()
    {
        // $Notification = FirebaseNotification::select(DB::raw("COUNT(*) as count"))
        // ->whereYear('created_at', date('Y'))
        // ->groupBy(DB::raw("Month(created_at)"))
        // ->pluck('count'); compact('Notification');


// return view('/home', compact('userData'));


        // return view('clients.dashboard');
// return view('clients.dashboard', compact('chartjs','Notification'));



//       }

        // return view('clients.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packages.create');
    }


}
