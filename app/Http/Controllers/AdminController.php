<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        return view('adminposts',compact('posts'));
    }

    public function dash(){
        $posts = Post::all();
        return view('dashboard',compact('posts'));
    }

    public function add(){
        return view('adminadd');
    }

    public function edit(){
        return view('adminedit');
    }
}
