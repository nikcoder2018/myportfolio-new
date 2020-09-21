<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('contents.home');
    }
    public function about(){
        return view('contents.about');
    }
    public function services(){
        return view('contents.services');
    }
    public function portfolio(){
        return view('contents.portfolio');
    }
    public function contact(){
        return view('contents.contact');
    }
}
