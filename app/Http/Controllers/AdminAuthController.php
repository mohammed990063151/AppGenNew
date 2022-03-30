<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class AdminAuthController extends Controller
{
    public function getLoginForm(){
        return view('admin.auth.login');
    }

    public function AdminLoign(Request $request){
        // return 'jksa';
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // return $credentials;
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
        return redirect()->intended('admin/dashboard');
        }
        // return 'no';
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }
}
