<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    
    public function index(){
        
            return view('admin.index');
        
    }
    public function login(Request $req){
        $credential = $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        $name = $req->input('username');
        $password = $req->input('password');
        $req->session()->put('data', $req->input());
        $data = DB::select('select id from admin_login where username=? and password=?', [$name,$password]);
        if (count($data) == 1){
            return view('admin.dash');
        }else{
            
            return redirect()->back()->with('invalid','Invalid Username or Password');
        }
    }
}
