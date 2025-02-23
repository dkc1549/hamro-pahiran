<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function shop(){
        return view('frontend.shop-grid');
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
