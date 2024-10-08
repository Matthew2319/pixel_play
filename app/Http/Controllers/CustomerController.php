<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    //
    public function index(){
        return view('uploadpost');
    }
    public function dash(){
        $users = User::all();
        return view('adminedit',compact('users'));
    }

    public function dashes(){
        $posts = Post::latest()->paginate(5);
        return view('dashboard',compact('posts'));
    }

    public function store(Request $request)
    {   
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            // 'user_id' => 'required|integer',
        ],[
            'title.required' => 'please enter the title',
            'desc.required' => 'please enter the description'
        ]);

        // Store the validated data in the database
        Post::create([
            'title' => $validated['title'],
            'desc' => $validated['desc'],
            'user_id' => Auth::user()->id
        ]);

        return redirect()->back()->with('success', 'Post created successfully!');
    }


    // public function showDashboard()
    // {
    // // Filter posts by the 'user_id' column that matches the authenticated user's ID
    // $posts = Post::where('user_id', Auth::id())->get();

    // return view('dashboard', ['posts' => $posts]);
    // }
}
