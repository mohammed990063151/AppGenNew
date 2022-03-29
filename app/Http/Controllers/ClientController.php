<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use App\Models\Package;
use App\Models\User;
use App\Traits\StatusAndDelete;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\App;
use App\Traits\UserMangements;


class ClientController extends Controller
{
    use StatusAndDelete , UserMangements;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Clients = User::with('Package')->paginate(10);
        // dd($Clients);
        $Packages = Package::get();
        return view('admin.clients.index' , compact('Clients' , 'Packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUser $request)
    {
       return $this->StoreUser(User::class , $request->email ,$request->name , $request->password, $request->package);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Packages = Package::get();
        $Client = User::find($id);
        return view('admin.clients.edit' , compact('Packages' , 'Client' , 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;

        User::find($id)->update([
            'name' =>$request->name ,
            'email' => $request->email ,
            'package_id' => $request->package ,
            'password' => bcrypt($request->password) ,
        ]);
        return redirect()->route('client.index');
    }
    public function status($id){
        return $this->StatusChange(User::class, $id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->Delete(User::class , $id);
    }
}
