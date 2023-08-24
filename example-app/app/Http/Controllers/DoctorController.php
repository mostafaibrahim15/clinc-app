<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $Doctors = Doctor::get();
        return view('admin.doctor.doctor' ,compact('Doctors'));
    }
    public function create()
    {
        return view('admin.doctor.createdoctor');
    }
    public function store(Request $request)
    {
        $validation= $request->validate(
            [
                'name'=> ['required','string','max:10',"unique:doctors,name"],
                'image' => ['required'],
                'major_id'=> ['required'],
            ]
            );
            Doctor::create(
                [
                    "image" => $validation['image'],
                    "name" => $validation['name'],
                    "major_id"=> $validation['major_id'],
                ]
               );
               return redirect()->route('doctor')
               ->with('success','major added successfully');
    }
    public function edite($id)
    {
        $Doctors= Doctor::findOrFail($id);
      return view('admin.doctor.editedoctor',compact('Doctors'));
    }
    public function update(Request $request,$id)
    {
         $request->validate(
            [
                'name'=> ['required','string','max:10',"unique:doctors,name"],
                'image' => ['required'],
                'major_id'=> ['required'],
            ]
            );
          $Doctors =Doctor::findOrFail($id);
          $Doctors->update(

                   $request->all()

               );
               return redirect()->route('doctor')
               ->with('success','doctor updated successfully');

    }
    public function show($id)
    {
        $Doctors= Doctor::findOrFail($id);
        return view('admin.doctor.editedoctor',compact('Doctors'));
    }
    public function delete($id)
    {
        $Doctors= Doctor::findOrFail($id);
        $Doctors->delete();
        return redirect()->route('doctor')
       ->with('success','major added successfully');

    }
    public function filter($major_id)
    {
        $Doctors= Doctor::findOrFail($major_id);
        return view('enduser.doctor.doctorindix',compact('Doctors'));
    }
}
