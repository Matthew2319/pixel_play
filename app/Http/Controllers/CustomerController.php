<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {   
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'user_id' => 'required|integer',
        ]);

        // Store the validated data in the database
        Post::create([
            'title' => $validated['title'],
            'desc' => $validated['desc'],
            'user_id' => $validated['user_id']
        ]);

        return redirect()->back()->with('success', 'Post created successfully!');
    }

}
