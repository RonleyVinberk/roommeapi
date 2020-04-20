<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = "ROOMME TEST (CRUD API)";
        return view('layouts/dashboard', compact('data'));
    }
}
