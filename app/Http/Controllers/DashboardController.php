<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $clik = auth()->user()->clik;
        
        return view('dashboard', ['clik' => $clik]);
    }

    public function cadastrar()
    {
        


        $this->index();
    }

}
