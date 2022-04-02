<?php

namespace App\Http\Controllers\front;

use App\Models\app;
use App\Models\app_profile;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\ApplctionRequest;
use Illuminate\Routing\Controller as BaseController;

class ApplicationController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;



    public function index()
    {
        $data = app::all();
        return view('clients.app.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data2 = app::get();
        return view('clients.app.create',compact('data2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplctionRequest $request)
    {
// return $request;
try{
                 $data = new app;


                 $image=$request->image;
                   $imagename = time().'.'.$image->getClientOriginalExtension();
                        $request->image->move('app',$imagename);
                               $data->image=$imagename;


                          $data->name=$request->name;

                          $data->link=$request->link;

                          $data->version=$request->version;

                          $data->save();


                          return redirect('/application')->with(['success' => 'ok']);
                          // DB::commit();
                      } catch (\Exception $ex) {
                          // DB::rollback();
                          return $ex;
                          return redirect('/application')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
                      }

    }
    public function edit($id){
        $data = app::find($id);
        // dd($data);

        return view('clients.app.edit' , compact('id','data' ));
    }


    public function update(request $request ,$id ){

      try{
        $data=app::find($id);
        if (!$data)
        return redirect()->route('clients.app.edit')->with(['error' => 'not found']);

        $image=$request->image;


        $imagename =time().'.'.$image->getClientOriginalExtension();

                 $request->image->move('app',$imagename);

                 $data->image=$imagename;


                 $data->name=$request->name;

                 $data->link=$request->link;

                 $data->version=$request->version;

                 $data->save();

                 return view('clients.app.edit')->with(['success' => 'ok']);
                          // DB::commit();
                      } catch (\Exception $ex) {
                          // DB::rollback();
                        //   return $ex;
                          return redirect('/application')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
                      }

                }


                public function destroy(request $request ,$id ){
                    try{
                $id = $request->id;

                app::find($id)->delete();

                return redirect('/application')->with(['success' => 'ok']);
                // DB::commit();
            } catch (\Exception $ex) {
                // DB::rollback();
                // return $ex;
                return redirect('/application')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
            }




                }

}
