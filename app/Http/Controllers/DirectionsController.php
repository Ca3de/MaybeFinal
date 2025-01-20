<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectionsController extends Controller
{
    public function index()
    {
        return view('directions')->with('pageTitle', 'Find Us');
    }
}

