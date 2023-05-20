<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        if (Auth::user()->role == 'dsc') {
            // return view('User.admin_index'); some weird route that show user info and let the user change their info themselves
            // return view('User.___dsc_index');  even more weird
            return view('User.admin_dashboard'); // the real dashboard for user muhammad
            // return view('User.dashboard'); 
            // return view('User._admin_index'); some weird statistic 

            // return view('User.ndsc_index'); this trash fr

            // create staff [done]
            // view all staff (link it with that form so the admin can edit staff info onthe fly)

        } elseif (Auth::user()->role == 'dsc') {
            return view('User.dsc_index');
        } elseif (Auth::user()->role == 'ndsc') {
            return view('User.ndsc_index');
        }
    }
}

