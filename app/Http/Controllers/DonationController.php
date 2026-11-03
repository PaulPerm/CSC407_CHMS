<?php

namespace App\Http\Controllers;
use App\Models\Donation;
use App\Models\Contact;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::with('contact')->get();

        return view('donations.index', compact('donations'));
    }
    public function create(Contact $contact)
    {
        return view('donations.create', compact('contact'));
    }
    public function store(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'Donation_Amount' => ['required', 'numeric', 'min:0.01'],
            'Donation_Date' => ['required', 'date'],
        ]);
        $contact->donations()->create($validated);
        return redirect()->route('people.index')->with('success','Donation added');
    }
}
