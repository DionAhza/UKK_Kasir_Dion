<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        if(!auth()->check()){
            return redirect()->route('login');
        }else{
            return view('dashboard');
        }
        
    }
}
