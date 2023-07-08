<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'dsc') {
            return view('User.dsc_index');
        } else if (Auth::user()->role == 'admin') {
            return view('User.admin_index');
        }
    }
}
