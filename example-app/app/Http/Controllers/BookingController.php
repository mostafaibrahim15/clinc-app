<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::get();
        return view('admin.booking.booking' ,compact('bookings'));
    }
    public function booking()
    {
        return view('enduser.booking.doctorname');
    }
}
