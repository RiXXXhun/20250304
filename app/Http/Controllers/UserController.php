<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createForm()
    {
        return view("users.create");
    }

    public function store(Request $request)
    {
        
    }
}
