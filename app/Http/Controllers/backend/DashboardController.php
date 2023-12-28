<?php


namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    function dashboard(){
        return view('backend.dashboard');
    }
}
