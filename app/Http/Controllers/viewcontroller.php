<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewcontroller extends Controller
{
    public function landinguser(){
        return view('welcome');
    }

    
    public function landingadmin(){
        return view('dashboard');
    }
}
