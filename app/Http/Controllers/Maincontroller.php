<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Maincontroller extends Controller
{
    public static function maincategorylist() {
        return Category::where('parent_id','=','0')->with('children')->get();
    }
    public function index(){
       // echo "index";
        $page = "home";
        $sliderdata = Book::limit(6)->get();
        $booklist = Book::limit(6)->get();
        $settings = Settings::first();
        return view('homeTrails.homePage',[
            'sliderdata'=> $sliderdata,
            'booklist'=> $booklist,
            'page'=> $page,
            'settings'=> $settings
        ]);
    }
    public function about(){
        $settings = Settings::first();
        return view('homeTrails.aboutus',[
            'settings'=> $settings
        ]);
    }
    public function contact(){
        $settings = Settings::first();
        return view('homeTrails.contactUs',[
            'settings'=> $settings
        ]);
    }
    public function references(){
        $settings = Settings::first();
        return view('homeTrails.references',[
            'settings'=> $settings
        ]);
    }

    public function book($id){
        // echo "index";
        $data = Book::find($id);
        $images = DB::table('images')->where('book_id',$id)->get();
        return view('homeTrails.bookDetails',[
            'data'=> $data,
            'images'=>$images
        ]);
    }
    public function categorybooks($id){
        // echo "index";
        echo 'category books page ';

        $category = Category::find($id);
        $books = DB::table('books')->where('category_id',$id)->get();

        return view('homeTrails.categorybooks',[
            'category'=> $category,
            'books'=>$books
        ]);
    }
    public function test(){
        //echo "Test Controller Page";
        return view('homeTrails.test2');
    }
}
