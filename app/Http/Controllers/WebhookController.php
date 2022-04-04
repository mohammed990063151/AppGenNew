<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handle(Request $request){
        info('web hook is verfiy jksa is a good man');
        info("$request");
        return $request;
    }
}
