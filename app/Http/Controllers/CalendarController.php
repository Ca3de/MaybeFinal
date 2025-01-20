<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        // In production, you could retrieve events from the database
        // For now, let's return a view
        return view('calendar')->with('pageTitle', 'Church Calendar');
    }
}

