<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadmeController extends Controller
{
    public function index()
    {
        $data['title'] = "ROOMME TEST (CRUD API)";
        return view('readme', compact('data'));
    }
}
