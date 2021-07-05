<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $bookStore =['yes24','youngbook','<script>alert("123");</script>'];
        return view('index',[
            'result' => $bookStore
        ]);
    }

    public function show(){
        return view('board');
    }
}
