<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProfileResource;
use App\Models\app;
use App\Models\app_profile;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    use ApiResponseTrait;
    public function index()
    {

        $Profile = app_profile::get();

        $array = [
            'data' => $Profile,
            'message' => 'ok',
            'status' => 200,
        ];
        // $msg = ["ok"];
        return response($array);

        $Profile = ProfileResource::collection(app_profile::get());
        return $this->apiResponse($Profile, 'ok', 200);
    }
    public function show($id)
    {
        $Profile = app_profile::find($id);

        if ($Profile) {
            return $this->apiResponse(new ProfileResource($Profile), 'ok', 200);
        }
        return $this->apiResponse(null, 'The Profile Not Found', 404);
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'Logo' => 'required_without:id|mimes:jpg,jpeg,png',
            'AppName' => 'required|string|max:10',
            'Link' => 'required|string|max:100',
            'Discrptions' => 'required|string|max:100',
            'Phone' => 'required|string|max:20',
            'Splash_Screen' => 'required|string|max:50',
            'WhatsApp' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null, $validator->errors(), 400);
        }

        $Profile = app_profile::create($request->all());

        if ($Profile) {
            return $this->apiResponse(new ProfileResource($Profile), 'The Profile Save', 201);
        }

        return $this->apiResponse(null, 'The Profile Not Save', 400);
    }
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'Name' => 'required|string|max:100',
            'Email'  => 'required|email|unique:profile,email,',
            'app_id'  => 'required|exists:application,id',
            'Facebook'   => 'required|string|max:50',
            'Snapchat'   => 'required|string|max:50',
            'Instgram'   => 'required|string|max:50',
            'Twitter'   => 'required|string|max:50',
            'TikTok'   => 'required|string|max:50',
            'Social_Media_Icons_Color;' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null, $validator->errors(), 400);
        }

        $Profile = app_profile::find($id);

        if (!$Profile) {
            return $this->apiResponse(null, 'The Profile Not Found', 404);
        }

        $Profile->update($request->all());

        if ($Profile) {
            return $this->apiResponse(new ProfileResource($Profile), 'The Profile update', 201);
        }
        
    }
}
