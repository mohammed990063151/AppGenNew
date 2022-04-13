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
        // dd($data);
        $applcation = app::all();
        return view('clients.app_profile.index', compact('profile', 'applcation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $profile = app_profile::all();
        $applcation = app::find($id);
        return view('clients.app_profile.create', compact('profile', 'applcation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileappRequest  $request)
    {

        // return $request ->except('_token');
        // app_profile::create($request->except('_token'));
        // return $request;
        try {
        //     return $request ->except('_token');
        // app_profile::create($request->except('_token'));
        // DB::beginTransaction();

        if (!$request->has('is_active'))
            $request->request->add(['is_active' => 0]);
        else
        //     $request->request->add(['is_active' => 1]);
        // app_profile::create([

        //     'Name' => $request->Name,
        //     'Email' => $request->Email,
        //     'Facebook' => $request->Facebook,
        //      'app_id' => $request->app_id,
        //     'Snapchat' => $request->Snapchat,
        //     'Instgram' => $request->Instgram,
        //     'Twitter' => $request->Twitter,
        //     'TikTok' => $request->TikTok,
        //     'Social_Media_Icons_Color' => $request->Social_Media_Icons_Color,
        //     'is_active' => $request->is_active,
            $profile = new app_profile;



            // DB::beginTransaction();
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


        // ]);

        //  $request->save();

        return redirect()->route('Screen.create', $profile->id);
        // DB::commit();
        } catch (\Exception $ex) {
        // DB::rollback();

        return $ex;
        return redirect() -> route('profile.index');
        }

    }

    public function edit($id)
    {
        $profile = app_profile::find($id);


        $applcation = app::get();

        return view('clients.app_profile.edit', compact('id', 'profile', 'applcation'));
    }


    public function update(request $request, $id)
    {

        // try {

        $profile = app_profile::find($id);

        if (!$profile)
            return redirect()->route('clients.app_profile.edit')->with(['error' => 'not found']);

        // DB::beginTransaction();
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
        $Screen = screen::find($id);
        $profile = app_profile::get();

        return view('clients.Screen.Screen.edit', compact('Screen', 'profile'));
        // DB::commit();
        // } catch (\Exception $ex) {
        // DB::rollback();
        $profile = app_profile::find($id);


        $applcation = app::get();

        return view('clients.app_profile.edit', compact('id', 'profile', 'applcation'));
        // }

    }


    public function destroy(request $request, $id)
    {
        try {
            $id = $request->id;
            app_profile::find($id)->delete();
            return redirect('/profile')->with(['success' => 'ok']);
        } catch (\Exception $ex) {
            // DB::rollback();
            return $ex;
            return redirect('/profile')->route('profile.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function Dashboard()
    {


        return view('front.dashboard');
    }
}
