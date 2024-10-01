<?php

namespace App\Http\Controllers;

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
}
