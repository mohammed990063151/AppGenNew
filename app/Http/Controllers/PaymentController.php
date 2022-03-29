<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function getPrice(){
        $Packages = Package::with('Features' , 'Details')->get();
        // dd($Package);
        foreach($Packages as $Package){
            $data[$Package->id] = ($Package->Features->pluck('feature_id'));
        }
        // return $data;
        $Features = Feature::get();
        return view('payment' , compact('Packages' , 'Features', 'data'));
    }
    public function ChosePrice(Request $request){
        // return $request;
        Session::put('package_id' , $request->package_id);
        return redirect()->route('register');
    }
}
