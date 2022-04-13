<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ScreenesResource;
use App\Models\screen;
use App\Models\app_profile;
use Illuminate\Support\Facades\Validator;

class ScreenesController extends Controller
{
    use ApiResponseTrait;
    public function index(){

$Screen= screen::get();

$array =[
    'data'=> $Screen,
    'message'=> 'ok',
    'status'=> 200,
    ];
            // $msg = ["ok"];
            return response($array);

            $Screen = ScreenesResource::collection(screen::get());
            return $this->apiResponse($Screen,'ok',200);


    }
    public function show($id){

//         $applction= new ApplctionResource(app::find($id));
// $array =[
// 'data'=> $applction,
// 'message'=> 'ok',
// 'status'=> 200,
// ];
//         $msg = ["ok"];
//         if($applction){
//         return response($array);
//         }

//             }
            $Screen = screen::find($id);

            if($Screen){
                return $this->apiResponse(new ScreenesResource($Screen),'ok',200);
            }
            return $this->apiResponse(null,'The Screen Not Found',404);
        }
        public function store(Request $request){

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
                return $this->apiResponse(null,$validator->errors(),400);
            }

            $Screen = screen::create($request->all());

            if($Screen){
                return $this->apiResponse(new ScreenesResource($Screen),'The Screen Save',201);
            }

            return $this->apiResponse(null,'The Screen Not Save',400);
        }
        public function update(Request $request ,$id){

            $validator = Validator::make($request->all(), [

                'image' => 'required_without:id|mimes:jpg,jpeg,png',
                'screen_type' => 'required|string|max:10',
                'Discrption1st'   => 'required|string|max:100',
                'profile_id'  => 'required|exists:app_profiles,id',
                'Color'   => 'required|string|max:50',
                'ContainarButtonBarColor'   => 'required|string|max:30',
                'IconsBackgroundColor'   => 'required|string|max:30',
                'IconsColor'   => 'required|string|max:20',
            ]);

            if ($validator->fails()) {
                return $this->apiResponse(null,$validator->errors(),400);
            }

            $Screen=screen::find($id);

            if(!$Screen){
                return $this->apiResponse(null,'The Screen Not Found',404);
            }

            $Screen->update($request->all());

            if($Screen){
                return $this->apiResponse(new ScreenesResource($Screen),'The Screen update',201);
            }
        }
}
