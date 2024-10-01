<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('adminposts');
    }

    public function add(){
        return view('adminadd');
    }

    public function edit(){
        return view('adminedit');
    }
}
