<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Event</title>
</head>
<body>
    <a href="{{ route('people.index') }}">← Back to People</a>

    <h1>Register {{ $contact->First_Name }} {{ $contact->Last_Name }} for an Event</h1>

    <form method="POST" action="{{ route('participants.store', $contact) }}">
        @csrf

        <div>
            <label for="Event_ID">Event</label>
            <select id="Event_ID" name="Event_ID">
                <option value="">-- Select an event --</option>
                @foreach ($events as $event)
                    <option value="{{ $event->Event_ID }}" @selected(old('Event_ID') == $event->Event_ID)>
                        {{ $event->Event_Title }} ({{ $event->Event_Start_Date?->format('M j, Y') }})
                    </option>
                @endforeach
            </select>
            @error('Event_ID') <p>{{ $message }}</p> @enderror
        </div>

        <button type="submit">Register</button>
        <a href="{{ route('people.index') }}">Cancel</a>
    </form>
</body>
</html>
