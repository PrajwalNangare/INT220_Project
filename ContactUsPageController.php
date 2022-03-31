<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsPageController extends Controller
{
    public function index()
    {
        return view('contact_us_page',['title' => '']);
    }
    public function index1()
    {
        return view('contact_us_popup',['title' => '']);
    }
    
}
