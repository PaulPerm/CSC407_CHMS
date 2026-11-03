@extends('layouts.app')

@section('title', 'Register for Event')

@section('content')
    <a href="{{ route('people.index') }}">← Back to People</a>

    <h1>Register {{ $contact->First_Name }} {{ $contact->Last_Name }} for an Event</h1>

    <form method="POST" action="{{ route('participants.store', $contact) }}">
        @csrf

        <div class="mb-3">
            <label for="Event_ID" class="form-label">Event</label>
            <select id="Event_ID" name="Event_ID" class="form-select">
                <option value="">-- Select an event --</option>
                @foreach ($events as $event)
                    <option value="{{ $event->Event_ID }}" @selected(old('Event_ID') == $event->Event_ID)>
                        {{ $event->Event_Title }} ({{ $event->Event_Start_Date?->format('M j, Y') }})
                    </option>
                @endforeach
            </select>
            @error('Event_ID') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
        <a href="{{ route('people.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
