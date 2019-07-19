<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\reservation;

class ReservationController extends Controller
{
    public function reserve(Request $request){
       
        $this->validate($request,[
           'name' => 'required',
           'phone' => 'required',      
           'email' => 'required',
           'dateandtime' => 'required'
         ]);
         $reservation = new reservation();
         $reservation->name = $request->name;
         $reservation->phone = $request->phone;
         $reservation->email = $request->email;
         $reservation->date_and_time = $request->dateandtime;
         $reservation->message = $request->message;
         $reservation->status = false;
         $reservation->save();
         Toastr::success('Reservation request sent successfully', 'Success', ["positionClass" => "toast-top-center"]);
      
         return redirect()->back();

    }
}
