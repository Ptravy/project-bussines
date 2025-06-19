<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function tampilDashboard()
    {
        return view('admin.dashboard');
    }

    function kembaliDashboard()
    {
        return view('welcome');
    }
}
