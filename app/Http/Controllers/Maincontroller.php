<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function index(){
       // echo "index";
        $sliderdata = Book::limit(6)->get();
        $sliderdata = Book::limit(6)->get();
        return view('homeTrails.homePage',[
            'sliderdata'=> $sliderdata
        ]);
    }
    public function test(){
        //echo "Test Controller Page";
        return view('homeTrails.test2');
    }
}
