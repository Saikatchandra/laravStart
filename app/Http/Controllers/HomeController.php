<?php

namespace App\Http\Controllers;

use App\item;
use App\category;
use App\slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = slider::all();
        $items = item::all();
        $categories = category::all();
        return view('welcome',compact('sliders','items','categories'));
    }
}
