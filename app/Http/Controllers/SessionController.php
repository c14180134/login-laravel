<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use PHPUnit\TestFixture\Success;
use Session;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }
    function login(Request $request){
        Session::flash('email',$request->email);
        $email = old('email', '');
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email belum terisi',
            'password.required'=>'Password belum terisi'
        ]);
        $remember = $request->has('remember');
        $LoginInfo=[
            'email'=>$request->email,
            'password'=>$request->password
        ];
       
        if(Auth::attempt($LoginInfo, $remember)){
            return redirect('user')->with('success','Login success');
        }else{
            return redirect('sesi')->withErrors('username dan password yang dimasukkan tidak valid');
        }
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $cookie = Cookie::forget('remember_token');
        return redirect('sesi')->withCookie($cookie)->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
    }
    function register(){
        return view('sesi/register');
    }
    function forgotpassword(){
        return view('sesi/forgotpassword');
    }
    function create(Request $request){
        Session::flash('email',$request->email);
        Session::flash('name',$request->name);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|confirmed'
        ],[
            'name.required'=>'Nama belum terisi',
            'email.required'=>'Email belum terisi',
            'email.unique'=>'Email sudah pernah digunakan',
            'password.required'=>'Password belum terisi',
            'password.min'=>'Password minimum 6 character'
        ]);

        $data =[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
        ];
        User::create($data);

        $LoginInfo=[
            'email'=>$request->email,
            'password'=>$request->password
        ];
       
        if(Auth::attempt($LoginInfo)){
            return redirect('user')->with('success','Login success');
        }else{
            return redirect('sesi')->withErrors('username dan password yang dimasukkan tidak valid');
        }
    }
}
