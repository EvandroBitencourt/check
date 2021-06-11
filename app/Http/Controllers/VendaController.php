<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        return view('home.index');
    }


    public function planos()
    {
        return view('planos');
    }
    
}
