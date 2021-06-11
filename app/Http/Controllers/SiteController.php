<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function plano($plano)
    {
        session()->put('plano', $plano);
        return redirect()->route('subscriptions.checkout');
    }
    public function planos()
    {
        return view('planos');
    }
    
}
