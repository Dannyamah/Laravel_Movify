<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function contact()
    {
        return view('pages.contact-us');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function movies()
    {
        return view('pages.movies');
    }
}
