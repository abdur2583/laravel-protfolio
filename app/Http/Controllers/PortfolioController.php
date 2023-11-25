<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    function index(){
        return view('index');
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
    function portfolio(){
        return view('portfolio');
    }
    function services(){
        return view('service');
    }
    function blog(){
        return view('blog');
    }
}
