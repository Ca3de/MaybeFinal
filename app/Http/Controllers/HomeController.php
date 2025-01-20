<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // SEO meta tags can be set dynamically if using a package or a custom solution
        // e.g. with the Meta facade or manually in the view
        return view('home')->with('pageTitle', 'Welcome to Our Church');
    }
}
