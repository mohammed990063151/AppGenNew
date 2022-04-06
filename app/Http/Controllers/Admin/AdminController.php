<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateUser;
use App\Models\Admin;
use App\Traits\StatusAndDelete;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Traits\UserMangements;


class AdminController extends BaseController
{

    use DispatchesJobs, ValidatesRequests , UserMangements ,StatusAndDelete;

    use AuthorizesRequests {
        authorize as protected baseAuthorize;
    }

    public function authorize($ability, $arguments = []){
        if(\Auth::guard('admin')->check()){
            \Auth::shouldUse('admin');
        }
        $this->baseAuthorize($ability, $arguments);
    }


    public function index(){
        $Admins = Admin::get();
        return view('admin.admin.index' , compact('Admins'));
    }

    public function create(){
        return view('admin.admin.create');
    }

    public function store(Request $request){
        // return $request;
        $redirectRoute = redirect()->route('admin.index');
        return $this->StoreUser(Admin::class , $request->admin_email , $request->admin_name , $request->admin_password  , null , $redirectRoute);
    }

    public function destroy($id){
        return $this->Delete(Admin::class , $id);
    }

    public function edit($id){
        $Admin = Admin::find($id);
        return view('admin.admin.create' ,['Admin' => $Admin]);
    }
    public function update(Request $request , $id){
        $Admin = Admin::find($id);
        $Admin->name = $request->admin_name ;
        $Admin->email = $request->admin_email;
        $Admin->password = bcrypt($request->admin_password);
        $Admin->save();
        // return $request;
        return redirect()->route('admin.index');
    }
}
