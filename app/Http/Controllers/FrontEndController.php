<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function work()
    {
        return view('frontend.work');
    }
}
