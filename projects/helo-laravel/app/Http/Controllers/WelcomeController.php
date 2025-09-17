<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show(){
        $message = "welcome to laravel";
        return view('mywelcome', ['message' => $message]);
    }
}
