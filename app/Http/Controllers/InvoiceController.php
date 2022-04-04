<?php

namespace App\Http\Controllers;

use App\Models\OrganizationProfile;
use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use App\Traits\PayWithPaypal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function getInvoice(){
        $SesstionPackageID = session()->get('package_id');
        // dd($SesstionPackageID);
        $SubscribtionPackageID = session()->get('subscribtion_id');
        if($SesstionPackageID && $SubscribtionPackageID ){
            $Package = Package::find($SesstionPackageID);
            // dd($Package);
            return view('invoice' , compact('Package'));
        }
        return redirect()->route('getPricing');
    }

    public function PayInvoice(Request $request){
        // return $request;
        $SesstionPackageID = session()->get('package_id');
        $SubscribtionPackageID = session()->get('subscribtion_id');
        // dd([$SesstionPackageID , $SubscribtionPackageID]);
        if($SesstionPackageID && $SubscribtionPackageID ){
            $Package = Package::find($SesstionPackageID);
            // dd(!$Package->is_freetrial);
            // if(auth()->user()->subscribed_to_free && auth()->user()->app_genration_price_paid)
            // {
                if($Package->is_freetrial && !auth()->user()->subscribed_to_free){
                    $Subscription = Subscription::find($SubscribtionPackageID);
                    $Subscription->exporation_date = Carbon::now()->addDays($Package->duration);
                    $Subscription->status = 'free';
                    // $Subscriptio
                    $Subscription->save();
                    $User = User::find(auth()->user()->id);
                    $User->crruent_subscription_id = $Subscription->id;
                    $User->package_id = $Package->id;
                    $User->subscribed_to_free = 1;
                    $User->is_subscribed = 1;
                    $User->save();
                    return redirect()->route('clients.dashboard');
            }else{
                $OrganizationProfile = OrganizationProfile::find($Package->id);
                $PayIstance = new PayWithPaypal();
                if(auth()->user()->app_genration_price_paid)
                $RetunedRouteWithPaymentValue = $PayIstance->postPaymentWithpaypal($Package->price,route('subscribtionStatus' , $SubscribtionPackageID));
                else
                $RetunedRouteWithPaymentValue = $PayIstance->postPaymentWithpaypal(($Package->price + $OrganizationProfile->fixed_subscribtion_price),route('subscribtionStatus' , $SubscribtionPackageID));
                return $RetunedRouteWithPaymentValue;
            }
        //   }
        }
        return redirect()->route('getPricing');
    }
}
