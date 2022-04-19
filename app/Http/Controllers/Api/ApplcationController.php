<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ApplctionResource;

use App\Models\app;
use Illuminate\Support\Facades\Validator;

class ApplcationController extends Controller
{

    use ApiResponseTrait;
    public function index(){

$applction= app::get();

$array =[
    'data'=> $applction,
    'message'=> 'ok',
    'status'=> 200,
    ];
            // $msg = ["ok"];
            return response($array);

            $applction = ApplctionResource::collection(app::get());
            return $this->apiResponse($applction,'ok',200);


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
            // $applction = app::find($id);

            $applction = app::with('Screen', 'AppProfile')->find($id);
            $MyApp = app::find($id);

            if($applction){
                return $this->apiResponse(new ApplctionResource($applction,$MyApp,$id),'ok',200);
            }
            return $this->apiResponse(null,'The apps Not Found',404);
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

            $applction = app::create($request->all());

            if($applction){
                return $this->apiResponse(new ApplctionResource($applction),'The app Save',201);
            }

            return $this->apiResponse(null,'The app Not Save',400);
        }

        public function update(Request $request ,$id){

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

            $applction=app::find($id);

            if(!$applction){
                return $this->apiResponse(null,'The applction Not Found',404);
            }

            $applction->update($request->all());

            if($applction){
                return $this->apiResponse(new ApplctionResource($applction),'The applction update',201);
            }
        }

}
