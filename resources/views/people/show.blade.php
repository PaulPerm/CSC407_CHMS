@extends('layouts.app')

@section('title', $contact->First_Name . ' ' . $contact->Last_Name)

@section('content')
    <a href="{{ route('people.index') }}">← Back to People</a>

    <h1>{{ $contact->First_Name }} {{ $contact->Last_Name }}</h1>

    <p>Date of Birth: {{ $contact->Date_of_Birth?->format('M j, Y') }}</p>
    <p>Gender: {{ $contact->Gender }}</p>
    <p>Marital Status: {{ $contact->Marital_Status }}</p>
    <p>Status: {{ $contact->Contact_Status }}</p>
    <p>Email: {{ $contact->Email_address }}</p>
    <p>Phone: {{ $contact->Mobile_Phone }}</p>

    <h2>Event History</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Event</th>
                <th>Start</th>
                <th>End</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contact->events as $event)
                <tr>
                    <td>{{ $event->Event_Title }}</td>
                    <td>{{ $event->Event_Start_Date?->format('M j, Y') }}</td>
                    <td>{{ $event->Event_End_Date?->format('M j, Y') }}</td>
                </tr>
            @empty
                <tr><td colspan="3">No events.</td></tr>
            @endforelse
        </tbody>
    </table>

    <h2>Donation History</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contact->donations as $donation)
                <tr>
                    <td>{{ $donation->Donation_Date?->format('M j, Y') }}</td>
                    <td>${{ number_format($donation->Donation_Amount, 2) }}</td>
                </tr>
            @empty
                <tr><td colspan="2">No donations.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
