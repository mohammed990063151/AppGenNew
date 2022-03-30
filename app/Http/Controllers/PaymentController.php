<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Package;
use App\Models\Subscription;
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

    public function getPriceingInside(){
            $Packages = Package::with('Features' , 'Details')->get();
            // dd($Package);
            $data = [];
            foreach($Packages as $Package){
                $data[$Package->id] = ($Package->Features->pluck('feature_id'));
            }
            // return $data;
            $Features = Feature::get();
        return view('priceing-inside' ,  compact('Packages' , 'Features', 'data'));
    }
    public function PayInside(Request $request){
        return $request;
        $Package = Package::find($request->id);
        $Subscription =   Subscription::create([
            'user_id' => auth()->user()->id ,
            'package_id' => $Package->id,
            'amount' => $Package->price,
        ]);

        return $Subscription;
    }
}
