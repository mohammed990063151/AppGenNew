<?php

namespace App\Http\Controllers\front;

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
        return view('clients.Screen.Screen.index' ,compact('Screen','profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Screen = screen::with("app_profile")->get();
        $profile= app_profile::all();

        return view('clients.Screen.Screen.create',compact('Screen','profile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {

        // return ;
        $Screen = new screen;


        $image=$request->screen_image;
          $imagename = time().'.'.$image->getClientOriginalExtension();
               $request->screen_image->move('screen',$imagename);
                      $Screen->screen_image=$imagename;


                      $Screen->profile_id=$request->profile_id;

                 $Screen->screen_title=$request->screen_title;

                 $Screen->screen_body=$request->screen_body;
                 $Screen->screen_type=$request->screen_type;

                 $Screen->save();

                 return redirect('/Screenes');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function show(screen $screen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $Screen=screen::find($id);
        $profile= app_profile::get();

        return view('clients.Screen.Screen.edit' , compact('Screen' ,'profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function update(request $request ,$id ){


// return $request;
        $Screen=screen::find($id);


        $image=$request->screen_image;


        $imagename =time().'.'.$image->getClientOriginalExtension();

                 $request->screen_image->move('screen',$imagename);

                 $Screen->screen_image=$imagename;


                 $Screen->screen_title=$request->screen_title;

                 $Screen->screen_body=$request->screen_body;



                 $Screen->save();

       return redirect('/Screenes');


                }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,$id ){

        $id = $request->id;
        screen1::find($id)->delete();
        return redirect('/Screenes');

        }
}
