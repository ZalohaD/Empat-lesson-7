<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
        public function displayForm(){
            $users = User::all();
            return view('userForm', ['users' => $users]);
        }

        public function getUserByID($id){
            $user = User::where(['id' => $id]) -> first();

            return view('singleUser',  ['user' => $user]);
        }

        public function createUser(Request $request){
            $user = new User();
            $user -> name = $request -> name;
            $user -> email = $request -> email;
            $user -> password = md5(md5($request -> password));
            $user -> save();

            return $this->displayForm();
        }
}
