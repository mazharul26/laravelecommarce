<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('user')){
            return"I am a user";
        }elseif(Auth::user()->hasRole('admin'))
        {
            return view('marketplace.layouts.dashboard');

        }elseif (Auth::user()->hasRole('super-admin')) {
        	return view('marketplace.layouts.dashboard');

        }
    }
}
