<?php

namespace App\Http\Controllers\Cms;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view('admin.page.auth.login');
    }
    
    public function login(Request $request){
        $validate = Validator::make($request->all(),
        [
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $data = User::where('email',$request->email)->first();
        if(!empty($data)){
            if ($request->password == $data->password) {
                Session::put('email',$data->email);
                return redirect()->route('admin-home');
            }else{
                return redirect()->route('login')->with('alert','Email or Password is Wrong');
            }
        }
    }

    public function logout(){
        Session::flush();
        return redirect()->route('login');
    }
}
