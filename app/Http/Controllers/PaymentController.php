<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Traits\PayWithPaypal;
use Carbon\Carbon;

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
        session()->put('package_id' , $Package->id);
        session()->put('subscribtion_id' , $Subscription->id);
        return redirect()->route('getInvoice');
    }

    public function subscribtionStatus($id , Request $request){
        // return $id;
        $PayIstance = new PayWithPaypal();
        $PaymentStatus  = $PayIstance->getPaymentStatus($request);
        $Subscription = Subscription::find($id);
        if($PaymentStatus){
            $Package = Package::find($Subscription->package_id);
            $Subscription->transaction_id = $request->PayerID;
            $Subscription->exporation_date = Carbon::now()->addDays($Package->duration);
            $Subscription->status = 'paied';
            $Subscription->save();
            $User = User::find(auth()->user()->id);
            $User->crruent_subscription_id = $Subscription->id;
            $User->package_id = $Package->id;
            $User->is_subscribed = 1;
            $User->save();
            return redirect()->route('clients.dashboard');
        }
        $Subscription = Subscription::find($id);
        // $Package = Package::find($Subscription->id);
        $Subscription->transaction_id = $request->PayerID;
        $Subscription->status = 'rejected';
        $Subscription->save();
        return redirect()->route('getPrice');
        // return $request;
    }
}
