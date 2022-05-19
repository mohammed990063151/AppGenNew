<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ApplctionResource;
use App\Http\Resources\Applction_BuildingResource;
use App\Models\Applction_Building;
use App\Models\app;
use App\Models\app_profile;
use Illuminate\Support\Facades\Validator;

class Applction_BuildingController extends Controller
{

    use ApiResponseTrait;
    public function getappli(){

        $Applction = app::with(['AppProfile']);
        return ApplctionResource::collection($Applction->paginate(50))->response();


    }

public function getApplication($Request){

return Applction_Building::where($Request->id)->with("AppProfile")->with("app");

}

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\JsonResponse
     */
    public function show( Request $Request ,$Applction){
        return (new ApplctionResource($Applction->loadMissing(['AppProfile'])))->response();
        }


}
