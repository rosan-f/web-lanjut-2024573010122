<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function hello(){
        $name = "Laravel Learner";
        return view('hello', ['name' => $name]);
    }

    public function greet($name){
        return view('greet', ['name' => ucfirst($name)]);
    }

    public function search(Request $request){
        $keyword = $request->query('q','none');
        return view('search', ['keyword' => $keyword]);
    }
}
