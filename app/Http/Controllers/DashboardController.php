<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function create()
    {
        return view('create');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
