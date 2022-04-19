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

    public function index()
    {
        $Screen = screen::with("app_profile")->get();
        $profile = app_profile::all();
        return view('clients.Screen.Screen.index', compact('Screen', 'profile'));
    }


    public function create($id)
    {

        $profile = app::find($id);
        return view('clients.Screen.Screen.create', compact('profile'));
    }

    public function create1($id)
    {
        $Screen = app::find($id);
        return view('clients.Screen.Screen.create1', compact('Screen'));
    }
    public function create2($id)
    {

        $Screen = app::find($id);
        return view('clients.Screen.Screen.create2', compact('Screen'));
    }

    public function store(ScreenRequest $request )
    {


        try {


            $Screen = new screen;


            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('screen', $imagename);
            $Screen->image = $imagename;


            $Screen->Discrption1st = $request->Discrption1st;

            $Screen->Color = $request->Color;
            $Screen->ContainarButtonBarColor = $request->ContainarButtonBarColor;

            $Screen->IconsBackgroundColor = $request->IconsBackgroundColor;
            $Screen->IconsColor = $request->IconsColor;
            $Screen->app_id = $request->app_id;


            $Screen->save();

            return redirect()->route('Screen.create1',$Screen->app_id);

        } catch (\Exception $ex) {

            return $ex;
            return redirect('/Screenes')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function store1(ScreenRequest $request)
    {


 try {


    $Screen = new screen;


    $image = $request->image;
    $imagename = time() . '.' . $image->getClientOriginalExtension();
    $request->image->move('screen', $imagename);
    $Screen->image = $imagename;


    $Screen->Discrption1st = $request->Discrption1st;

    $Screen->Color = $request->Color;
    $Screen->ContainarButtonBarColor = $request->ContainarButtonBarColor;

    $Screen->IconsBackgroundColor = $request->IconsBackgroundColor;
    $Screen->IconsColor = $request->IconsColor;
    $Screen->app_id = $request->app_id;


    $Screen->save();


    return redirect()->route('Screen.create2', $Screen->app_id);

} catch (\Exception $ex) {

    return $ex;
    return redirect('/Screenes');
}
    }









    public function store2(ScreenRequest $request)
    {

 try {
    $Screen = new screen;


    $image = $request->image;
    $imagename = time() . '.' . $image->getClientOriginalExtension();
    $request->image->move('screen', $imagename);
    $Screen->image = $imagename;

    $Screen->Discrption1st = $request->Discrption1st;

    $Screen->Color = $request->Color;
    $Screen->ContainarButtonBarColor = $request->ContainarButtonBarColor;

    $Screen->IconsBackgroundColor = $request->IconsBackgroundColor;
    $Screen->IconsColor = $request->IconsColor;
    $Screen->app_id = $request->app_id;
    $Screen->save();
    return  redirect('/application');
} catch (\Exception $ex) {
    return $ex;
    return redirect('/Screenes');
}
    }



    public function edit($id)
    {

        $Screen=screen::find($id);
        return view('clients.Screen.Screen.edit', compact('Screen'));
    }



public function edit1($id)
{
    $Screen=screen::find($id);
    return view('clients.Screen.Screen.edit1', compact('Screen'));


}
public function edit2($id)
{

    $Screen=screen::find($id);

    return view('clients.Screen.Screen.edit2', compact('Screen'));




}

public function update(request $request, $id)
{

    try {

        $Screen = screen::find($id);
        if (!$Screen)
            return redirect()->route('clients.Screen.Screen.edit')->with(['error' => 'not found']);

        $image = $request->image;

        if($image){
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('screen', $imagename);

        $Screen->image = $imagename;

        }


        $Screen->Discrption1st = $request->Discrption1st;
        $Screen->Color = $request->Color;
        $Screen->ContainarButtonBarColor = $request->ContainarButtonBarColor;
        $Screen->IconsColor = $request->IconsColor;
        $Screen->screen_type = $request->screen_type;




        $Screen->save();
        return redirect()->route('application.edit', $Screen->app_id);

    } catch (\Exception $ex) {
        return redirect('/application')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

    }
}



public function update1(ScreenRequest $request, $id)
{

    try {

        $Screen = screen::find($id);
        if (!$Screen)
            return redirect()->route('clients.Screen.Screen.edit')->with(['error' => 'not found']);

        $image = $request->image;

        if($image){
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('screen', $imagename);

        $Screen->image = $imagename;
        }



        $Screen->Discrption1st = $request->Discrption1st;
        $Screen->Color = $request->Color;
        $Screen->ContainarButtonBarColor = $request->ContainarButtonBarColor;
        $Screen->IconsColor = $request->IconsColor;

        $Screen->save();
            return redirect()->route('application.edit', $Screen->app_id);

        } catch (\Exception $ex) {
            return redirect('/application')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }
}




public function update2(ScreenRequest $request, $id)
{

    try {

        $Screen = screen::find($id);
        if (!$Screen)
            return redirect()->route('clients.Screen.Screen.edit2')->with(['error' => 'not found']);

        $image = $request->image;
        if($image){

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('screen', $imagename);

        $Screen->image = $imagename;

        }


        $Screen->Discrption1st = $request->Discrption1st;
        $Screen->Color = $request->Color;
        $Screen->ContainarButtonBarColor = $request->ContainarButtonBarColor;
        $Screen->IconsColor = $request->IconsColor;

        $Screen->save();
        return redirect()->route('application.edit', $Screen->app_id);

    } catch (\Exception $ex) {
        return redirect('/application')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

    }


}
public function destroy(request $request, $id)
{
    try {
        $id = $request->id;
        screen::find($id)->delete();
        return redirect('/Screenes')->with(['success' => 'ok']);

    } catch (\Exception $ex) {
        return redirect('/Screenes')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    }

    return redirect('/Screenes');
}
}
