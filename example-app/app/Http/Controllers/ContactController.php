<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $Contacts = Contact::get();
        return view('admin.contact.contact' ,compact('Contacts'));
    }
}
