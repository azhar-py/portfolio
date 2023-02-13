<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function dashboard()
    {
        # code...
        return view('dashboard');
    }
}
