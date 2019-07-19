<?php

namespace App\Http\Controllers\Admin;

use App\category;
use App\item;
use App\slider;
use App\reservation;
use App\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
     public function index() {
        
      $categoryCount = category::count();
      $itemCount = item::count();
      $sliderCount = slider::count();
      $reservations = reservation::where('status',false)->get();
      $contactCount = contact::count();
        return view('admin.dashboard',compact('categoryCount','itemCount','sliderCount','reservations','contactCount'));
     }
}
