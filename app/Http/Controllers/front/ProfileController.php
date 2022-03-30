<?php

namespace App\Http\Controllers\front;

use App\Models\app;
use App\Models\app_profile;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Routing\Controller as BaseController;

class ProfileController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;



    public function index()
    {
        $data = app_profile::with("app")->get();
        // dd($data);
        $applcation = app::all();
        return view('clients.app_profile.index' ,compact('data','applcation'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = app_profile::all();
        $applcation = app::all();
        return view('clients.app_profile.create',compact('data','applcation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( request $request)
    {
// return $request;
                        app_profile::create([

                 'orgname' => $request->orgname,
                 'orgemail' => $request->orgemail,
                'ogwhatsapp' => $request->ogwhatsapp,
                 'app_id' => $request->app_id,
                 'color' => $request->color,
                 'pc' => $request->pc,
                 'sc' => $request->sc,

            ]);

                //  $data->save();
                return redirect('/profile');


    }

    public function edit($id){
        $data=app_profile::find($id);


        $data2 = app::get();

        return view('clients.app_profile.edit' , compact('id','data','data2' ));
    }


    public function update(request $request ,$id ){
        $data=app_profile::find($id);
                 $data->orgname=$request->orgname;
                 $data->orgemail=$request->orgemail;
                 $data->ogwhatsapp=$request->ogwhatsapp;
                 $data->app_id=$request->app_id;
                 $data->color=$request->color;
                 $data->pc=$request->pc;
                 $data->sc=$request->sc;

                 $data->save();

       return redirect('/profile');

                }


                public function destroy(request $request ,$id ){

                $id = $request->id;
                app_profile::find($id)->delete();
                return redirect('/profile');

                }

                public function Dashboard( ){


                    return view('front.dashboard');

                    }
}
