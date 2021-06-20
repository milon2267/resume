<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller{
    // function __construct(){
    //     $this->middleware('verified');
    // }

    function Dashboard(){
        return view('backend.dashboard');
    }


}
