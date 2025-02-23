<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Outfit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $outfits = Outfit::limit(8)->latest()->get();
        return view('frontend.index', compact('outfits'));
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
