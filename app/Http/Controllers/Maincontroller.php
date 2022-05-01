<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function index(){
       // echo "index";
        $sliderdata = Book::limit(6)->get();
        $booklist = Book::limit(6)->get();
        return view('homeTrails.homePage',[
            'sliderdata'=> $sliderdata,
            'booklist'=> $booklist
        ]);
    }
    public function test(){
        //echo "Test Controller Page";
        return view('homeTrails.test2');
    }
}
