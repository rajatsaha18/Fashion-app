<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('website.home.home');
    }
    public function about(){
        return view('website.about.about');
    }
    public function contact(){
        return view('website.contact.contact');
    }
    public function booking(){
        return view('website.book.book');
    }
}
