<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function index(){
        return view('homeTrails.homePage');
    }
    public function test(){
        //echo "Test Controller Page";
        return view('homeTrails.test2');
    }
}
