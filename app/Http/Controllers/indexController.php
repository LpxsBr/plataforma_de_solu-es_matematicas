<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    function index(){
        return view('duckapp.inicio');
    }
}
