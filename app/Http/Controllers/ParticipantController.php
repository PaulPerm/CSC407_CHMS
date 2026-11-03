<?php

namespace App\Http\Controllers;
use App\Models\EventParticipant;
use App\Models\Contact;
use App\Models\Event;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    //
    public function index()
    {
        //
    }
    public function create(Contact $contact)
    {
        $events = Event::all();
        return view('participants.create', compact('contact','events'));
    }
    public function store(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'Event_ID' => ['required', 'exists:events,Event_ID']
        ]);

        //syncWithoutDeatachign to prevent same person signing up multiple times
        $contact->events()->syncWithoutDetaching($validated['Event_ID']);

        return redirect()->route('people.index')->with('success','Registered For Event');
    }
}
