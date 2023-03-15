<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user1;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $data = user1::orderBy('nama', 'desc')->paginate(1);
        return view('user/index')->with('data',$data);
    }
    function detail($id){
        // return "<h1> saya adalah user dari controller dengan id = $id</h1>";
        $data = user1::where('id',$id)->first();
        return view('user/show')->with('data',$data);
    }
}
