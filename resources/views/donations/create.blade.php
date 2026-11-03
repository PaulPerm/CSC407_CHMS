@extends('layouts.app')

@section('title', 'Make a Donation')

@section('content')
    <div class="mb-3">
        <a href="{{ route('people.index') }}" class="btn btn-sm btn-outline-dark">← Back to People</a>
    </div>

    <h1>Donation from {{ $contact->First_Name }} {{ $contact->Last_Name }}</h1>

    <form method="POST" action="{{ route('donations.store', $contact) }}">
        @csrf

        <div class="mb-3">
            <label for="Donation_Amount" class="form-label">Amount</label>
            <input type="number" step="0.01" min="0.01" id="Donation_Amount" name="Donation_Amount" class="form-control" value="{{ old('Donation_Amount') }}">
            @error('Donation_Amount') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label for="Donation_Date" class="form-label">Date</label>
            <input type="date" id="Donation_Date" name="Donation_Date" class="form-control" value="{{ old('Donation_Date', now()->toDateString()) }}">
            @error('Donation_Date') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save Donation</button>
        <a href="{{ route('people.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
