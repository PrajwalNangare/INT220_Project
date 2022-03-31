<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryOFTravellingController extends Controller
{
    public function index()
    {
        return view('gallery_of_travelling', ['title' => '']);
    }
}

