<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['title'] = "ROOMME TEST (CRUD API)";
        return view('user', compact('data'));
    }
}
