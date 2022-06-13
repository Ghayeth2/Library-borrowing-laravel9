<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = User::all();
        return view('Admin.users.index',[
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
        $data = User::all();
        return view('Admin.users.create',[
            'data'=> $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new User();
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->category_id;
        $data->title = $request->title;
        $data->author = $request->author;
        $data->isbn = $request->isbn;
        $data->edition = $request->edition;
        $data->keyword = $request->keyword;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->detail = $request->detail;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('Admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        $roles = Role::all();
        return view('Admin.users.show',[
            'data'=> $data,
            'roles'=> $roles
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addrole(Request $request, $id)
    {
        //
        $data = new RoleUser();
        $data->role_id = $request->role_id;
        $data->user_id = $id;
        $data->save();
        return redirect(route('Admin.users.show',['id'=>$id]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        $datalist = Category::all();
        return view('Admin.users.edit',[
            'data'=> $data,
            'datalist'=> $datalist
        ]);
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
        $data =  User::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->category_id;
        $data->title = $request->title;
        $data->author = $request->author;
        $data->isbn = $request->isbn;
        $data->edition = $request->edition;
        $data->keyword = $request->keyword;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->detail = $request->detail;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('Admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyrole($uid,$rid)
    {
        $data =  User::find($uid);
        $data->roles()->detach($rid);
        return redirect(route('Admin.users.show',['id'=>$uid]));
    }
        public function destroy($id)
    {
        $data =  User::find($id);
        $data->delete();
        return redirect(route('Admin.users.index'));

    }
}
