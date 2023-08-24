<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $Majors = Major::get();

        return view('admin.major.index' ,compact('Majors'));
    }
    public function create()
    {
        return view('admin.major');
    }
    public function store(Request $request)
    {
       $validation= $request->validate([
            "title" => ['required','string','max:10',"unique:majors,title"],
            "image" => ['required'],
        ]);
       Major::create(
        [
            "title" => $validation['title'],
            "image" => $validation['image'],
        ]
       );
       return redirect()->route('admin.major.major')
       ->with('success','major added successfully');
    }
    public function show($id)
    {
        $Majors= Major::findOrFail($id);
        return view('admin.major.show',compact('Majors'));

    }
    public function edite($id)
    {
      $Majors= Major::findOrFail($id);
      return view('admin.major.edite',compact('Majors'));

    }
    public function update(Request $request,$id)
    {
         $request->validate([
            "title" => ['required','string','max:10'.$id],

        ]);
        $Majors= Major::findOrFail($id);
        $Majors->update(
            $request->all()
        );
           return redirect()->route('major')
           ->with('success','major updateed successfully');

    }
    public function delete($id)
    {
        $Majors= Major::findOrFail($id);
        $Majors->delete();
        return redirect()->route('major')
       ->with('success','major added successfully');

    }
}
