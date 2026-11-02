<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('people.index', compact('contacts'));
    }
    public function show(Contact $contact)
    {
        return view('people.show', compact('contact'));
    }
}
