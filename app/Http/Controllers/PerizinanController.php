<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerizinanController extends Controller
{
    public function index()
    {
        return view('perizinan.index');
    }
}
