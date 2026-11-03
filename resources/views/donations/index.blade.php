@extends('layouts.app')

@section('title', 'Donations')

@section('content')
    <h1>Donations</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Donation ID</th>
                <th>Donor</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donations as $donation)
                <tr>
                    <td>{{ $donation->Donation_ID }}</td>
                    <td>{{ $donation->contact?->Last_Name }}, {{ $donation->contact?->First_Name }}</td>
                    <td>${{ number_format($donation->Donation_Amount, 2) }}</td>
                    <td>{{ $donation->Donation_Date?->format('M j, Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
