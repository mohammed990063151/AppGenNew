<?php

namespace App\Http\Controllers\front;
use App\Models\User;
use App\Models\app;
use App\Models\Applction_Building;
use App\Models\app_profile;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\ApplctionRequest;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;



    public function index()
    {
        $Applction = app::all();
        return view('clients.app.index', compact('Applction'));
    }


    public function create()
    {
        // $applcation = User::where->get();
        $Applction = app::all();

        return view('clients.app.create', compact('Applction'));
    }


    public function store(request $request)
    {
// return  $request;
        try {
// return $request;

            $Applction = new app;


            $Logo = $request->Logo;

            $imagename = time() . '.' . $Logo->getClientOriginalExtension();
            $request->Logo->move('app', $imagename);
            $Applction->Logo = $imagename;

            $image = $request->Splash_Screen;

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->Splash_Screen->move('app', $imagename);
            $Applction->Splash_Screen = $imagename;


            $Applction->AppName = $request->AppName;
            $Applction->Link = $request->Link;
            $Applction->Discrptions = $request->Discrptions;
            $Applction->Phone = $request->Phone;
            $Applction->WhatsApp = $request->WhatsApp;
            $Applction->user_id = (Auth::User()->id);
            // 'user_id' => (Auth::User()->name);
// dd($Applction);

            $Applction->save();
            return redirect()->route('profile.create', $Applction->id);
        } catch (\Exception $ex) {

            return $ex;
            return redirect('/application');
        }
    }
    public function edit($id)
    {

        $Applction = app::with('Screen', 'AppProfile')->find($id);
        $MyApp = app::find($id);
        if ($id) {
            return view('clients.app.dashboard', compact('id', 'Applction', 'MyApp'));
        } else {
            return redirect()->route('application.index');
        }
    }
    public function edit_Applaction($id)
    {
        $Applction = app::with('Screen', 'AppProfile')->find($id);

        return view('clients.app.edit', compact('id', 'Applction'));
    }


    public function update(request $request, $id)
    {

        try {

            $Applction = app::find($id);
            if (!$Applction)
                return redirect()->route('clients.app.edit');

            $Logo = $request->Logo;

            if ($Logo) {
                $imagename = time() . '.' . $Logo->getClientOriginalExtension();

                $request->Logo->move('app', $imagename);

                $Applction->Logo = $imagename;
            }
            $Applction->id = $request->id;
            $Applction->AppName = $request->AppName;
            $Applction->Link = $request->Link;

            $Applction->Discrptions = $request->Discrptions;
            $Applction->Phone = $request->Phone;
            $Applction->WhatsApp = $request->WhatsApp;
            $Applction->Splash_Screen = $request->Splash_Screen;


            $Applction->save();
            $Applction = app::with('Screen', 'AppProfile')->find($id);
            $MyApp = app::find($id);

            return view('clients.app.dashboard', compact('id', 'Applction', 'MyApp'));
        } catch (\Exception $ex) {

            return $ex;
            return redirect()->route('Screen.create');
        }
    }


    public function delete(request $request, $id)
    {
        try {
            $id = $request->id;

            app::find($id)->delete();

            return redirect('/application')->with(['success' => 'ok']);
        } catch (\Exception $ex) {

            return redirect('/application')->with(['error' => '?????? ?????? ???? ?????????? ???????????????? ??????????']);
        }
    }



    public function AddDetialsDetials($ProfileID)
    {

        $profile = app_profile::find($ProfileID);


        return view('clients.app_profile.edit', compact('profile'));
    }

    public function Applction_Building(request $request, $id)
    {
        try {
            $Applctiones = app::with('Screen', 'AppProfile')->find($id);
                    $DATA  =  [
                            'id_Applction'=>$Applctiones["id"],
                            'id_prfile'=>$Applctiones["AppProfile"]->id,
                            'APK'=>$Applctiones->APK,
                        ];
                        // dd($DATA);
                        Applction_Building::create($DATA);
                        $MyApp = app::find($id);
                        $Applction = app::with('Screen', 'AppProfile')->find($id);
                } catch (\Exception $ex) {
                    return $ex;
                    session()->flash('errors', 'TAn error occurred, please try again later');
                    return view('clients.app.dashboard', compact('id', 'Applction', 'MyApp'));

                }
                session()->flash('Add', 'The operation was successful');
                return view('clients.app.dashboard', compact('id', 'Applction', 'MyApp'));
            }
}
