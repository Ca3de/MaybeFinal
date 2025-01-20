<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Image::all(); // Get all images from database
        return view('gallery', [
            'images' => $images,
            'pageTitle' => 'Church Gallery'
        ]);
    }
}

