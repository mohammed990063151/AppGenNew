<?php

namespace App\Http\Controllers\front;
use App\Models\app;
use App\Models\screen;
use App\Models\app_profile;
use Illuminate\Http\Request;
use App\Http\Requests\ScreenRequest;
use Illuminate\Routing\Controller;

class ScreenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Screen = screen::with("app_profile")->get();
        $profile = app_profile::all();
        // return $profile;
        return view('clients.Screen.Screen.index', compact('Screen', 'profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // $Screen = screen::with("app_profile")->get();
        // $profile = app_profile::all();, compact('Screen', 'profile')
        $profile = app_profile::find($id);
        return view('clients.Screen.Screen.create', compact('profile'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScreenRequest $request)
    {
        // return $request;

        try {

            // return ;
            $Screen = new screen;


            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('screen', $imagename);
            $Screen->image = $imagename;


            $Screen->profile_id = $request->profile_id;

            $Screen->Discrption1st = $request->Discrption1st;

            $Screen->Color = $request->Color;
            $Screen->ContainarButtonBarColor = $request->ContainarButtonBarColor;

            $Screen->IconsBackgroundColor = $request->IconsBackgroundColor;
            $Screen->IconsColor = $request->IconsColor;
            // $Screen->screen_type = $request->screen_type;

            $Screen->save();

            //  return redirect('/Screenes');
            // DB::commit();
            $profileid=app_profile::get()->where("app_id")->last();

            if(!$profileid)
            return redirect()->route('Screen.create1',$profileid);
            else
            return response()->json(['message' => 'error message'], 500);

            // DB::commit();
        } catch (\Exception $ex) {
            // DB::rollback();
            return $ex;
            return redirect('/Screenes')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function store1(ScreenRequest $request)
    {
 // return $request;

 try {

    // return ;
    $Screen = new screen;


    $image = $request->image;
    $imagename = time() . '.' . $image->getClientOriginalExtension();
    $request->image->move('screen', $imagename);
    $Screen->image = $imagename;


    // $Screen->profile_id = $request->profile_id;

    $Screen->Discrption1st = $request->Discrption1st;

    $Screen->Color = $request->Color;
    $Screen->ContainarButtonBarColor = $request->ContainarButtonBarColor;

    $Screen->IconsBackgroundColor = $request->IconsBackgroundColor;
    $Screen->IconsColor = $request->IconsColor;
    // $Screen->screen_type = $request->screen_type;

    $Screen->save();

    //  return redirect('/Screenes');
    // DB::commit();
    return redirect()->route('Screen.create2', $Screen->id);
    // DB::commit();
} catch (\Exception $ex) {
    // DB::rollback();
    return $ex;
    return redirect('/Screenes');
}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Screen = screen::find($id);
        $profile = app_profile::get();

        return view('clients.Screen.Screen.edit', compact('Screen', 'profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function update(ScreenRequest $request, $id)
    {

        try {
            return $request;
            $Screen = screen::find($id);
            if (!$Screen)
                return redirect()->route('clients.Screen.Screen.edit')->with(['error' => 'not found']);

            $image = $request->image;


            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('screen', $imagename);

            $Screen->image = $imagename;


            // $Screen->profile_id = $request->profile_id;

            $Screen->Discrption1st = $request->Discrption1st;
            $Screen->Color = $request->Color;
            $Screen->ContainarButtonBarColor = $request->ContainarButtonBarColor;
            $Screen->IconsColor = $request->IconsColor;
            // $Screen->screen_type = $request->screen_type;




            $Screen->save();
            //  DB::commit();
            return redirect('/Screenes')->with(['success' => 'ok']);
            // DB::commit();
        } catch (\Exception $ex) {
            // DB::rollback();
            //    / return $ex;
            return redirect('/Screenes')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

        return redirect('/Screenes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request, $id)
    {
        try {
            $id = $request->id;
            screen::find($id)->delete();
            return redirect('/Screenes')->with(['success' => 'ok']);
            // DB::commit();
        } catch (\Exception $ex) {
            // DB::rollback();
            //   /  return $ex;
            return redirect('/Screenes')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

        return redirect('/Screenes');
    }


    public function create1($id)
    {
        // $Screen = screen::with("app_profile")->get();
        // $profile = app_profile::all();, compact('Screen', 'profile')


        $profile = app_profile::find($id);
        return view('clients.Screen.Screen.create1', compact('profile'));
    }
    public function create2($id)
    {
        // $Screen = screen::with("app_profile")->get();
        // $profile = app_profile::all();, compact('Screen', 'profile')


        $profile = app_profile::find($id);
        return view('clients.Screen.Screen.create2', compact('profile'));
    }

    public function store2(ScreenRequest $request)
    {
 // return $request;

 try {

    // return ;
    $Screen = new screen;


    $image = $request->image;
    $imagename = time() . '.' . $image->getClientOriginalExtension();
    $request->image->move('screen', $imagename);
    $Screen->image = $imagename;


    // $Screen->profile_id = $request->profile_id;

    $Screen->Discrption1st = $request->Discrption1st;

    $Screen->Color = $request->Color;
    $Screen->ContainarButtonBarColor = $request->ContainarButtonBarColor;

    $Screen->IconsBackgroundColor = $request->IconsBackgroundColor;
    $Screen->IconsColor = $request->IconsColor;
    // $Screen->screen_type = $request->screen_type;

    $Screen->save();

    //  return redirect('/Screenes');
    // DB::commit();
    return  redirect('/application');
    // DB::commit();
} catch (\Exception $ex) {
    // DB::rollback();
    return $ex;
    return redirect('/Screenes');
}
    }



}
