<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Doctor;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $Majors=Major::get();
        $Doctors=Doctor::get();
        $Bookings=Booking::get();
        $Contacts=Contact::get();
        return view('enduser.index',compact('Majors','Doctors','Bookings','Contacts'));

    }
    public function getindex()
    {
        $Users=User::get();
        return view('admin.users.user',compact('Users'));
    }
    public function majorindex()
    {
        $Majors=Major::get();
        return view('enduser.major.majorindex',compact('Majors'));
    }
    public function doctorindex()
    {
        $Majors=Major::get();
        $Doctors=Doctor::get();
        return view('enduser.doctor.doctorindex',compact('Doctors','Majors'));
    }
    public function loginindex()
    {
        $Users=User::get();
        return view('enduser.login.loginindex',compact('Users'));
    }
    public function registerindex()
    {
        $Users=User::get();
        return view('enduser.register.registerindex',compact('Users'));
    }
    public function store(Request $request)
    {
       $validation= $request->validate([
        'name'=>['required','string','min:3','max:15'],
        'email'=>['required','unique:users,email'],
        'password'=>['required','min:6','max:12'],
        'phone'=>['required'],

        ]);
        User::create(
        [
            "name" => $validation['name'],
            "email" =>$validation['email'],
            "password" =>$validation['password'],
            "phone" =>$validation['phone'],
        ]

        );

        return redirect()->route('check')
       ->with('success','major added successfully');
    }
    public function checkuser()
    {
        $Users=User::get();
        return view('enduser.login.loginindex',compact('Users'));
    }
    public function show($email)
    {
        // $Users=User::findOrFail($email);
        if($Users=User::findOrFail($email))
        return view('enduser,adminpage',compact('Users'));
        else
        (
          view('enduser.userpage',compact('Users'))
        );
    }

}
