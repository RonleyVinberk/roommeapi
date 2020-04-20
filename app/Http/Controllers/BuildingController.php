<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        $data['title'] = "ROOMME TEST (CRUD API)";
        return view('building', compact('data'));
    }
}
