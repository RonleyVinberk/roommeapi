<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherErrorController extends Controller
{
    public function index()
    {
        $data['title'] = "ROOMME TEST (CRUD API)";
        return view('other-error', compact('data'));
    }
}
