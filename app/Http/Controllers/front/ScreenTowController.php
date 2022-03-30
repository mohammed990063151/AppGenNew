<?php

namespace App\Http\Controllers\front;

use App\Models\screen2;
use Illuminate\Http\Request;
use Illuminate\Http\Request\ScreenRequest;
use Illuminate\Routing\Controller;

class ScreenTowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Screen2 = screen2::all();
        return view('clients.Screen.Screen2.index' ,compact('Screen2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Screen2 = screen2::get();

        return view('clients.Screen.Screen2.create',compact('Screen2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScreenRequest $request)
    {
        $Screen2 = new screen2;


        $image=$request->screen_image;
          $imagename = time().'.'.$image->getClientOriginalExtension();
               $request->screen_image->move('screen2',$imagename);
                      $Screen2->screen_image=$imagename;




                 $Screen2->screen_title=$request->screen_title;

                 $Screen2->screen_body=$request->screen_body;

                 $Screen2->save();

                 return redirect('/Screenes2');

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
        $Screen2=screen2::find($id);

        return view('clients.Screen.Screen2.edit' , compact('Screen2' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function update(ScreenRequest $request ,$id ){
        $Screen2=screen2::find($id);


        $image=$request->screen_image;


        $imagename =time().'.'.$image->getClientOriginalExtension();

                 $request->screen_image->move('screen2',$imagename);

                 $Screen1->screen_image=$imagename;


                 $Screen1->screen_title=$request->screen_title;

                 $Screen1->screen_body=$request->screen_body;



                 $Screen2->save();

       return redirect('/Screenes2');

                }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScreenRequest $request ,$id ){

        $id = $request->id;
        screen1::find($id)->delete();
        return redirect('/Screenes2');

        }
}
