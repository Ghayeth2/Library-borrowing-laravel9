<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\BorrowMain;
use App\Models\Comments;
use App\Models\Messages;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homeTrails.user.index');
    }
    public function reviews(){
        $comments = Comments::where('user_id','=',Auth::id())->get();
        return view('homeTrails.user.comments',[
            'comments'=> $comments
        ]);
    }
    public function books(){
        $books = BorrowMain::where('user_id','=',Auth::id())->get();
        return view('homeTrails.user.books',[
            'books'=> $books
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reviewdestroy($id)
    {
        $data =  Comments::find($id);
        $data->delete();
        return redirect(route('userpanel.reviews'));
    }
    public function booksdestroy ($id)
    {
        //
        $data= BorrowMain::find($id);
        $data->delete();
        return redirect(route('userpanel.books'));
    }
}
