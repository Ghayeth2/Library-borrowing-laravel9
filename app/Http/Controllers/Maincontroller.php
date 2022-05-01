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

    public function book($id){
        // echo "index";
        $data = Book::find($id);
        return view('homeTrails.bookDetails',[
            'data'=> $data
        ]);
    }
    public function test(){
        //echo "Test Controller Page";
        return view('homeTrails.test2');
    }
}
