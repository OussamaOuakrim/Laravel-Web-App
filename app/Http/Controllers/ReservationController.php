<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    //
    function show() {
        $data = Reservation ::all();
        return view('admin.reservations',['reservations'=>$data]);

    }
}
