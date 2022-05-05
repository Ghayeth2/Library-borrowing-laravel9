<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Maincontroller extends Controller
{
    public static function maincategorylist() {
        return Category::where('parent_id','=','0')->with('children')->get();
    }
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
