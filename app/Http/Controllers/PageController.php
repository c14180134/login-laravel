<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        return view("page/index");
    }
    function contact(){
        $data = [
            'judul'=>'ini adalah kontak',
            'kontak'=>[
                'email' => 'hartantioan@gmail.com',
                'youtube'=> 'gk ada bre',
            ],
        ];
        return view("page/contact")->with($data);
    }
}
