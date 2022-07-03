<?php

namespace App\Http\Controllers;

use App\Models\app;
use App\Models\Package;
use App\Models\Product;
use App\Models\PosProducts;
use App\Models\OrderHistory;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index()
    {
    //     select id , month(created_at) as monthename  from clients WHERE created_at > DATE_SUB(now(), INTERVAL 5 MONTH) GROUP BY monthename;
    //     $data = [];
    //     $data['SallaCount'] =  app::count();
    //     $data['PosCount'] =  Package::count();
    //     $data['OrderCount']  = Subscription::count();
    // $Sub  = Subscription::select(DB::raw("COUNT(*) as count"))
    // ->whereYear('created_at', date('m'))
    // ->groupBy(DB::raw("Month(created_at)"))
    // ->pluck('count'); compact('data');
    // dd($Sub);
    // return view('Admin.Dashboard', $Sub);
    }

}
