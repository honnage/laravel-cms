<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tag;

class UserController extends Controller
{
    // public function index(){
    //     return view('users.index')->with('users',User::all());
    // }

    public function index()
    {
        return view('users.index')->with('users',User::all());
    }
}
