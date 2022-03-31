<?php

namespace App\Http\Controllers;

use App\Models\OrganizationProfile;
use App\Models\Package;
use App\Traits\PayWithPaypal;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function getInvoice(){
        $SesstionPackageID = session()->get('package_id');
        $SubscribtionPackageID = session()->get('subscribtion_id');
        if($SesstionPackageID && $SubscribtionPackageID ){
            $Package = Package::find($SesstionPackageID);
            return view('invoice' , compact('Package'));
        }
        return redirect()->route('getPricing');
    }

    public function PayInvoice(Request $request){
        // return $request;
        $SesstionPackageID = session()->get('package_id');
        $SubscribtionPackageID = session()->get('subscribtion_id');
        if($SesstionPackageID && $SubscribtionPackageID ){
            $Package = Package::find($SesstionPackageID);
            $OrganizationProfile = OrganizationProfile::find($Package->id);
            $PayIstance = new PayWithPaypal();
            return $PayIstance->postPaymentWithpaypal(($Package->price + $OrganizationProfile->fixed_subscribtion_price),route('subscribtionStatus' , $SubscribtionPackageID));
        }
        return redirect()->route('getPricing');
    }
}
