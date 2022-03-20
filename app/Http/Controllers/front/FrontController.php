<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home');
    }


    public function about()
    {
        return view('front.about');
    }

    public function cart()
    {
        return view('front.cart');
    }
    public function shop()
    {
        return view('front.shop');
    }
    public function checkout()
    {
        return view('front.checkout');
    }
    public function contact()
    {
        return view('front.contact');
    }

    public function details()
    {
        return view('front.details');
    }

    public function thanks()
    {
        return view('front.thanks');
    }

    public function returns()
    {
        return view('front.returns');
    }

    public function terms()
    {
        return view('front.terms');
    }

    public function privacy()
    {
        return view('front.privacy');
    }
}
