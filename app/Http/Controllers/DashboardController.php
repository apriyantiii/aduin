<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        dd($user);
        return view('dashboard.index');
    }
}
