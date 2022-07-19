<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    // create index view
    function index()
    {
        return view('duckapp.inicio');
    }
}
