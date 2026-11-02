<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Donation</title>
</head>
<body>
    <a href="{{ route('people.index') }}">← Back to People</a>

    <h1>Donation from {{ $contact->First_Name }} {{ $contact->Last_Name }}</h1>

    <form method="POST" action="{{ route('donations.store', $contact) }}">
        @csrf

        <div>
            <label for="Donation_Amount">Amount</label>
            <input type="number" step="0.01" min="0.01" id="Donation_Amount" name="Donation_Amount" value="{{ old('Donation_Amount') }}">
            @error('Donation_Amount') <p>{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="Donation_Date">Date</label>
            <input type="date" id="Donation_Date" name="Donation_Date" value="{{ old('Donation_Date', now()->toDateString()) }}">
            @error('Donation_Date') <p>{{ $message }}</p> @enderror
        </div>

        <button type="submit">Save Donation</button>
        <a href="{{ route('people.index') }}">Cancel</a>
    </form>
</body>
</html>
