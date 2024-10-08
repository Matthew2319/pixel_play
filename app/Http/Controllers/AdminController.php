<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator; 

class AdminController extends Controller
{
    //
    public function index(){
        $posts = Post::latest()->paginate(10);
        return view('adminposts',compact('posts'));
    }

    public function dash(){
        $posts = Post::latest()->paginate(10);
        return view('dashboard',compact('posts'));
    }

    public function add(){
        return view('adminadd');
    }

    public function edit(){
        return view('adminedit');
    }
}
