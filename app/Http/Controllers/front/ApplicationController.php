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
        $Applction = app::all();
        return view('clients.app.index', compact('Applction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Applction = app::get();
        return view('clients.app.create', compact('Applction'));
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
        try {
            $Applction = new app;


            $image = $request->Logo;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->Logo->move('app', $imagename);
            $Applction->Logo = $imagename;


            $Applction->AppName = $request->AppName;
            $Applction->Link = $request->Link;
            //  $Applction->version=$request->version;
            $Applction->Discrptions = $request->Discrptions;
            $Applction->Phone = $request->Phone;
            $Applction->WhatsApp = $request->WhatsApp;
            // $Applction->Splash_Screen = $request->Splash_Screen;
            //    $Applction->user_id=$request->user_id;


            $Applction->save();
// dd($Applction);
            return redirect()->route('profile.create', $Applction->id);
            // DB::commit();
        } catch (\Exception $ex) {
            // DB::rollback();
            return $ex;
            return redirect('/application')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
    public function edit($id)
    {
        $Applction = app::find($id);
        // dd($data);

        return view('clients.app.edit', compact('id', 'Applction'));
    }


    public function update(request $request, $id)
    {

        try {
            //   return $request;
            $Applction = app::find($id);
            if (!$Applction)
                return redirect()->route('clients.app.edit');

            $Logo = $request->Logo;

if($Logo){
            $imagename = time() . '.' . $Logo->getClientOriginalExtension();

            $request->Logo->move('app', $imagename);

            $Applction->Logo = $imagename;
        }
            $Applction->AppName = $request->AppName;
            $Applction->Link = $request->Link;
            //  $Applction->version=$request->version;
            $Applction->Discrptions = $request->Discrptions;
            $Applction->Phone = $request->Phone;
            $Applction->WhatsApp = $request->WhatsApp;
            $Applction->Splash_Screen = $request->Splash_Screen;
            //    $Applction->user_id=$request->user_id;

            $Applction->save();
            //return redirect()->route('Screen.edit');


            $profileid=app_profile::where("app_id",$id)->latest()->get();
      //      dd($profileid);
// if(!$profileid)
return redirect()->route('profile.edit',$profileid->$id);
// else
// return response()->json(['message' => 'error message'], 500);

            // DB::commit();
        } catch (\Exception $ex) {
            // DB::rollback();
            return $ex;
            return redirect()->route('Screen.create' );
        }
    }


    public function destroy(request $request, $id)
    {
        try {
            $id = $request->id;

            app::find($id)->delete();

            return redirect('/application')->with(['success' => 'ok']);
            // DB::commit();
        } catch (\Exception $ex) {
            // DB::rollback();
            return $ex;
            return redirect('/application')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
