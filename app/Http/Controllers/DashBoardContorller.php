<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashBoardContorller extends Controller
{
    public function index(){
        
        $Sub = DB::select('SELECT COUNT(id) as data  , MONTHName(created_at) as name  FROM `subscriptions` GROUP By name');

        // dd($Sub);
        return view('Admin.Dashboard', compact('Sub'));
        // return view('admin.dashboard');
        // return 'jksaaltigani';
    }

}
