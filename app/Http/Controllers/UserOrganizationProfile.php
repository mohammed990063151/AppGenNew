<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOrganizationProfile extends Controller
{
    public function edit(Request $request){
        $Validator = validator($request->all());


        // dd(Auth::user()->id);


        $OrganizationProfile = \App\Models\OrganizationProfile::first();
        $OrganizationProfile->update($request->except('_token'));
        // return redirect()->back();
        return view('userporfile');


    }
    public function store(Request $request){

        $Validator = validator($request->all());



        $OrganizationProfile = \App\Models\OrganizationProfile::first();
        $OrganizationProfile->update($request->except('_token'));
        // return redirect()->back();
        return view('userporfile');

    }
}
