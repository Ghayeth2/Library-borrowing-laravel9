<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\BorrowMain;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Nette\Utils\DateTime;

class BorrowMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function borrowindex()
    {
        $data = BorrowMain::where('user_id',Auth::id())->get();
        return view('homeTrails.user.myborrows',[
            'data' => $data
        ]);
    }










    public function borrowmain($id)
    {
        $data = Book::find($id);
        return view('homeTrails.user.Borrowmain',[
            'data'=> $data
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
    public function storeborrowbook(Request $request)
    {
        $data = new BorrowMain();
        $data->book_id = $request->input('id');
        $data->user_id = Auth::id();// logged in user
        $data->bookdate = $request->input('bookdate');

        $data->returndate = $request->input('returndate');
        $data->IP = $_SERVER['REMOTE_ADDR'];


        $datetime1 = $request->input('bookdate');
        $datetime2 = $request->input('returndate');
        $date1 = new DateTime($datetime1);
        $date2 = new DateTime($datetime2);
        $interval = $date2->diff($date1);
        $days =  $interval->format('%a');

        $data->days = $days;
        $data->save();
        return redirect()->back()->with('info','Book has been added..');
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
    public function destroyborrowbook($id)
    {
        $data = BorrowMain::find($id);
        $data->delete();
        return redirect()->back()->with('info','Book has been deleted..');
    }
}
