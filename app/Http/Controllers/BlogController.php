<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function display(){
        return view('posts');

    }
    public function login(){
        return view('login');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        return view('posts', ['data' => $data]);
    }
}
