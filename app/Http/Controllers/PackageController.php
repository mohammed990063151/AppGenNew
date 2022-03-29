<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Package;
use App\Models\packageDetails;
use App\Models\PackageFeature;
use App\Traits\StatusAndDelete;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    use StatusAndDelete;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Packages = Package::get();
        return view('packages.index' ,compact('Packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $Validator = validator($request->all() , [
            'Name' => 'required',
            'Price' => 'required|integer' ,
            'Duration' => 'required|integer' ,
            'Icon' => 'required' ,
            'Text' => 'required',
        ]);

        if($Validator->fails()) return $Validator->errors();
        $Package  = Package::create([
            'name' => $request->Name ,
            'price' => $request->Price ,
            'duration' => $request->Duration ,
        ]);
         packageDetails::create([
             'package_id' => $Package->id,
            'icons' => $request->Icon ,
            'text' => $request->Text ,
         ]);
        //  $PackageFetures = Feature::get();
         $PackageId = $Package->id;
        //  return view('packages.create2' , compact("PackageId"));
        return redirect()->route('addFeatures',$PackageId);

    }

    public function addFeatures($id){
        $PackageFetures = Feature::get();
        return view('packages.create2' , compact('id','PackageFetures'));
    }

    public function EditFeatures($id){
        $PackageFetures = Feature::get();
        $PackageHasFetures  = PackageFeature::where('package_id' , $id)->get()->pluck('feature_id')->toArray();
        // return ($PackageHasFetures);
        return view('packages.editFetures' , compact('id','PackageFetures' , 'PackageHasFetures'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function StoreFeatures($id , Request $request){
        // return $request;
        if($request->update){
            PackageFeature::where('package_id', $id)->delete();
        }
        // return 'deleted';
        $Features = $request->features;
        foreach ($Features as  $Feature) {
            PackageFeature::create(['package_id' => $id , 'feature_id' => $Feature ]);
        }
        // return $Features;
        return redirect()->route('packages.index');
        }
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($package)
    {
        return $this->Delete(Package::class , $package);
    }
    public function status($id)
    {
        // return 'jksa';
        return $this->StatusChange(Package::class , $id);
    }
}
