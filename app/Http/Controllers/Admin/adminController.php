<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index2(){
        return view('Admin.index');
    }
    public function settings(){
        $data = Settings::first();
        if($data == null){
            $data = new Settings();
            $data->title = 'Project title';
            $data->save();
            $data = Settings::first();
        }
        return view('Admin.settings',['data'=>$data]);
    }
    public function settingsupdate(Request $request){
       $id = $request->input('id');
       $data = Settings::find($id);
       $data->title = $request->input('title');
       $data->keyword = $request->input('keyword');
       $data->description = $request->input('description');
       $data->company = $request->input('company');
       $data->address = $request->input('address');
       $data->phone = $request->input('phone');
       $data->fax = $request->input('fax');
       $data->email = $request->input('email');
       $data->stmpserver = $request->input('stmpserver');
       $data->stmpemail = $request->input('stmpemail');
       $data->stmppassword = $request->input('stmppassword');
       $data->stmpport = $request->input('stmpport');
       $data->facebook = $request->input('facebook');
       $data->instagram = $request->input('instagram');
       $data->twitter = $request->input('twitter');
       $data->aboutus = $request->input('aboutus');
       $data->contact = $request->input('contact');
       $data->references = $request->input('references');
       if($request->file('icon')){
           $data->icon = $request->file('icon')->store('images');
       }
       $data->status = $request->input('status');
       $data->save();
       return redirect()->route('Admin.settings');
    }
}
