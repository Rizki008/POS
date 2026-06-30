<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanControllers extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }
}
