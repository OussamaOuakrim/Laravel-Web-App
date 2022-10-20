<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Vendor\laratrust\src\Traits\LaratrustUserTrait ;


class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
            return view('user.userdash');
        }elseif(Auth::user()->hasRole('chef')){
            return view('chef.chefdash');
        }elseif(Auth::user()->hasRole('admin')){
            return view('admin.admindash');
        }
    }
}
