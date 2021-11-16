<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getAllUsers() 
    {
        $users = User::orderBy("created_at")->with('relationship')->paginate('10');
        dd($users);
        return view("user.index", compact("users"));
    }
}
