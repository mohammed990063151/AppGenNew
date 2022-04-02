<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationProfile extends Controller
{
    public function getForm(){
        return view('setting.profile');
    }
    public function storeFrom(Request $request){

        $Validator = validator($request->all() , [
            'fixed_price' => 'integer', 
            'phone_no' => 'integer', 
        ]);
        if($request->hasFile('logoo') && $request->logoo != null){
            $filename =  $request->file('logoo')->getClientOriginalName();
            $request->logoo->move(public_path('logo') , $request->logoo->getClientOriginalName());
            $request['logo'] = $filename;
        }
        $OrganizationProfile = \App\Models\OrganizationProfile::first();
        $OrganizationProfile->update($request->except('_token'));
        return redirect()->back();
    }
}
