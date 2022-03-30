<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Package;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Traits\PayWithPaypal;
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

        $Package = Package::find($request->package_id);
        $Subscription =   Subscription::create([
            'user_id' => auth()->user()->id ,
            'package_id' => $Package->id,
            'amount' => $Package->price,
        ]);
        // return 'jksa';
        $PayIstance = new PayWithPaypal();
        return $PayIstance->postPaymentWithpaypal($Package->price ,route('subscribtionStatus' , $Subscription->id));
    }

    public function subscribtionStatus($id , Request $request){
        // return $id;
        $PayIstance = new PayWithPaypal();
        $PaymentStatus  = $PayIstance->getPaymentStatus($request);
        if($PaymentStatus){
            return $Subscription = Subscription::find($id);
        }


        return $request;

    }
}
