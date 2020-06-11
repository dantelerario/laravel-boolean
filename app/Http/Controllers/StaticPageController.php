<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //homepage
    public function index(){
        return view('static-pages.index');
    }

    //privacy
    public function privacy(){
        return view('static-pages.privacy');
    }

    //faq
    public function faq(){
        return view('static-pages.faq');
    }
}
