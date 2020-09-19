<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function homepage(){
        return view('homepage')->with([
            'homepage'=>true
        ]);
    }
    public function contact(){
        return view('contact')->with([
            'contact' => true
        ]);
    }
    public function about(){
        return view('about')->with([
            'about' => true
        ]);
    }
}
