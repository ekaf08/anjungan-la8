<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnjunganController extends Controller
{
    public function index()
    {
        return view('anjungan.index');
    }
}
