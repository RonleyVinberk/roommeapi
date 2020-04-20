<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $data['title'] = "ROOMME TEST (CRUD API)";
        return view('room', compact('data'));
    }
}
