<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class quemSomosController extends Controller
{
    //the 'quem somos' page
    function quemsomos(){
        return view('duckapp.quemsomos');
    }
}
