<?php

namespace App\Http\Controllers\front;

use App\Models\app;
use App\Models\app_profile;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
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
        $data = app_profile::get();
        $data2 = app::get();
        return view('clients.app.create',compact('data','data2'));
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

                 $data = new app;


                 $image=$request->image;
                   $imagename = time().'.'.$image->getClientOriginalExtension();
                        $request->image->move('app',$imagename);
                               $data->image=$imagename;


                          $data->name=$request->name;

                          $data->link=$request->link;

                          $data->version=$request->version;

                          $data->save();

                          return redirect()->back();

    }
    public function edit($id){
        $data = app::find($id);
        // dd($data);

        return view('clients.app.edit' , compact('id','data' ));
    }


    public function update(Request $request ,$id ){
        $data=app::find($id);


        $image=$request->image;


        $imagename =time().'.'.$image->getClientOriginalExtension();

                 $request->image->move('app',$imagename);

                 $data->image=$imagename;


                 $data->name=$request->name;

                 $data->link=$request->link;

                 $data->version=$request->version;

                 $data->save();

                 $data = app::all();
        return view('clients.app.index' ,compact('data'));

                }


}
