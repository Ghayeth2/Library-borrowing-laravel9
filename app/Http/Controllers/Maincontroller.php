<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Comments;
use App\Models\FAQ;
use App\Models\Messages;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function faq(){
        $settings = Settings::first();
        $datalist = FAQ::all();
        return view('homeTrails.faq',[
            'settings'=> $settings,
            'datalist'=> $datalist
        ]);
    }
    public function contact(){
        $settings = Settings::first();
        return view('homeTrails.contactUs',[
            'settings'=> $settings
        ]);
    }
    public function savemessage(Request $request){
        //dd($request);
        $data = new Messages();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data->save();
        return redirect()->route('contact')->with('info','Your message has been sent .');
    }
    public function savecomment(Request $request){
       //dd($request);
        $data = new Comments();
        $data->user_id = Auth::id();
        $data->book_id = $request->input('book_id');
        $data->comment = $request->input('comment');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('book',['id'=>$request->input('book_id')])->with('info','Your message has been sent .');
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
        $review = Comments::where('book_id',$id)->get();
        return view('homeTrails.bookDetails',[
            'data'=> $data,
            'images'=>$images,
            'review'=> $review
        ]);
    }
    public function categorybooks($id){
        // echo "index";

        $category = Category::find($id);
        $books = DB::table('books')->where('category_id',$id)->get();

        return view('homeTrails.categorybooks',[
            'category'=> $category,
            'books'=>$books
        ]);
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function adminlogincheck(Request $request){
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/Admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
