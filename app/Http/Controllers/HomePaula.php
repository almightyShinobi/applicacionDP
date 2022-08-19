<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePaula extends Controller
{
    public function index()
    {
        return view('miperfil.homePaula');
    }
}
