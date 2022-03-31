<?php

namespace App\Http\Controllers\front;

use App\Models\screen3;
use Illuminate\Http\Request;
use Illuminate\Http\Request\ScreenRequest;
use Illuminate\Routing\Controller;

class ScreenThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Screen3 = screen3::all();
        return view('clients.Screen.Screen3.index' ,compact('Screen3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Screen3 = screen3::get();

        return view('clients.Screen.Screen3.create',compact('Screen3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScreenRequest $request)
    {
        $Screen3 = new screen3;


        $image=$request->screen_image;
          $imagename = time().'.'.$image->getClientOriginalExtension();
               $request->screen_image->move('screen3',$imagename);
                      $Screen3->screen_image=$imagename;




                 $Screen3->screen_title=$request->screen_title;

                 $Screen3->screen_body=$request->screen_body;

                 $Screen3->save();

                 return redirect('/Screenes3');

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
        $Screen3=screen3::find($id);

        return view('clients.Screen.Screen3.edit' , compact('Screen3' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function update(ScreenRequest $request ,$id ){
        $Screen3=screen3::find($id);


        $image=$request->screen_image;


        $imagename =time().'.'.$image->getClientOriginalExtension();

                 $request->screen_image->move('screen3',$imagename);

                 $Screen3->screen_image=$imagename;


                 $Screen3->screen_title=$request->screen_title;

                 $Screen3->screen_body=$request->screen_body;



                 $Screen3->save();

       return redirect('/Screenes3');

                }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScreenRequest $request ,$id ){

        $id = $request->id;
        screen3::find($id)->delete();
        return redirect('/Screenes3');

        }
}
