<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Doctor;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $Majors=Major::get();
        $Doctors=Doctor::get();
        $Bookings=Booking::get();
        $Contacts=Contact::get();
        $Users=User::get();
        return view('admin.homepage',compact('Majors','Doctors','Bookings','Contacts','Users'));


    }
}
