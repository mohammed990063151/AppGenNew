<?php

namespace App\Http\Controllers\front;

use App\Models\app;
use App\Models\screen;
use App\Models\app_profile;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileappRequest;
use DB;
use Illuminate\Routing\Controller as BaseController;

class ProfileController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;



    public function index()
    {
        $profile = app_profile::with("app")->get();

        $applcation = app::all();
        return view('clients.app_profile.index', compact('profile', 'applcation'));
    }


    public function create($id)
    {
        $profile = app_profile::all();
        $applcation = app::find($id);
        return view('clients.app_profile.create', compact('profile', 'applcation'));
    }


    public function store(ProfileappRequest  $request)
    {

        try {


        if (!$request->has('is_active'))
            $request->request->add(['is_active' => 0]);
        else

            $profile = new app_profile;

            $profile->Name = $request->Name;
            $profile->Email = $request->Email;
            $profile->Facebook = $request->Facebook;
             $profile->app_id=$request->app_id;
            $profile->Snapchat = $request->Snapchat;
            $profile->Instgram = $request->Instgram;
            $profile->Twitter = $request->Twitter;
            $profile->Social_Media_Icons_Color = $request->Social_Media_Icons_Color;
            $profile->is_active = $request->is_active;

            $profile->save();


        return redirect()->route('Screen.create', $profile->app_id);

        } catch (\Exception $ex) {


        return $ex;
        return redirect() -> route('profile.index');
        }

    }


    public function edit( $id)
    {



         $profile=app_profile::where("app_id",$id)->latest()->get()->first();

        return view('clients.app_profile.edit', compact('profile'));
    }


    public function update(request $request, $id)
    {

        try {

        $profile = app_profile::find($id);

        if (!$profile)
            return redirect()->route('clients.app_profile.edit')->with(['error' => 'not found']);


        $profile->Name = $request->Name;
        $profile->Email = $request->Email;
        $profile->Facebook = $request->Facebook;

        $profile->Snapchat = $request->Snapchat;
        $profile->Instgram = $request->Instgram;
        $profile->Twitter = $request->Twitter;
        $profile->Social_Media_Icons_Color = $request->Social_Media_Icons_Color;
        $profile->is_active = $request->is_active;

        $profile->save();

       return redirect()->route('application.edit', $profile->app_id);

        } catch (\Exception $ex) {
            return redirect('/application')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }

    }


    public function destroy(request $request, $id)
    {
        try {
            $id = $request->id;
            app_profile::find($id)->delete();
            return redirect('/profile')->with(['success' => 'ok']);
        } catch (\Exception $ex) {

            return $ex;
            return redirect('/profile')->route('profile.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function Dashboard()
    {


        return view('front.dashboard');
    }


}
