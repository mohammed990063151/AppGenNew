<?php

namespace App\Http\Controllers\front;

use App\Models\app;
use App\Models\app_profile;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProfileController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;



    public function index()
    {
        $data = app_profile::get();
        return view('clients.dashboard' ,compact('data'));
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
        return view('clients.app_profile.create',compact('data','data2'));
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
app_profile::create([

                 'orgname' => $request->orgname,
                 'orgemail' => $request->orgemail,
                'ogwhatsapp' => $request->ogwhatsapp,
                //  $data->app_id=$request->app_id;

            ]);

                //  $data->save();
                 return redirect()->back();

    }
}
