<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SCCPController extends Controller
{
    public function index(){

        if(Auth::user()->hasRole('admin')){
            return view('Admin.sccp');
        }

    }
}
