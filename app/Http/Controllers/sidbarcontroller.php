<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sidbarcontroller extends Controller
{
    public function show(){

        $sub =   Subscription::with('package')->where('user_id', Auth::user()->id )->first()->package()->name;

return view('layouts.includes.sidebar', compact('sub'));

    }
}
