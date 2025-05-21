<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Statisticcontroller extends Controller
{
    public function index()
    {
        return view('statistic');
    }
}
