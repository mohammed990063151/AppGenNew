<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardContorller extends Controller
{
    public function index(){
        return view('admin.dashboard');
        // return 'jksaaltigani';
    }

}
