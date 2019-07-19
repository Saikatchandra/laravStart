<?php

namespace App\Http\Controllers\Admin;

use App\reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function index(){
        $reservations = reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }

    public function status($id){
           $reservation = reservation::find($id);
           $reservation->status = true;
           $reservation->save();
           Toastr::success('Reservation successfully confirmed','Success',["positionClass" => "toast-top-right"]);
           return redirect()->back();

    }

    public function destroy($id){
        $reservation = reservation::find($id)->delete();
        Toastr::success('Reservation successfully Deleted','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
  
    }
}
