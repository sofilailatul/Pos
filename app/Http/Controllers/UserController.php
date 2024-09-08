<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id, $name)
    {
        // Anda bisa mengakses id dan name dari parameter route
        return view('user', ['id' => $id, 'name' => $name]);
    }
}
