<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function shop()
    {
        return view('shop');
    }
    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }
    //Penny 2022/11/27
    public function blog_details()
    {
        return view('blog-details');
    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function confirmation()
    {
        return view('confirmation');
    }
    public function elements()
    {
        return view('elements');
    }
    public function product_details()
    {
        return view('product_details');
    }
    public function login()
    {
        return view('login');
    }
}