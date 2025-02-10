<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainHomeController extends Controller
{

    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
        //dd($courses);
        return view('frontend.home');
    }

    public function dashboard()
    {
        
        return view('frontend.dashboard');
    }

    public function services()
    {
        return view('frontend.service');
    }
    public function aboutUs()
    {
        return view('frontend.about');
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }
    public function portfolio()
    {
        return view('frontend.portfolio');
    }
}