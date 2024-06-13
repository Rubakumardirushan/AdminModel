<?php

namespace Dirushan\Models\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Dirushan\Models\Models\Admin;
class modelcontroller extends BaseController
{
    public function index(){
        return view('models::create');
    }
    public function store(Request $request){
        
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $data=array('name'=>$name,'email'=>$email,'password'=>$password);
        Admin::create($data);
        return redirect('admininfo')->with('success', 'Data Added Successfully');
        
    }
    public function admininfo(Request $request){
        $admin=Admin::all();

        return view('models::Admin',compact('admin'));

    }
}
