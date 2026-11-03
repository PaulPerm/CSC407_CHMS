@extends('layouts.app')

@section('title', 'Donations')

@section('content')
    <h1>Donations</h1>
    <input type="text" id="search" class="form-control mb-3" placeholder="Search...">

    <table class="table table-striped" id="donation-table">
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

@push('scripts')
    <script>
        const search = document.getElementById('search');
        const rows = document.querySelectorAll('#donation-table tbody tr');

        search.addEventListener('input', () => {
            const term = search.value.toLowerCase();


            rows.forEach(row=>{
                const current_row = row.textContent.toLowerCase();
                if(current_row.includes(term)){
                    row.style.display ='';
                }
                else{
                    row.style.display = 'none';
                }

            });
        });
    </script>
@endpush

