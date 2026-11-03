@extends('layouts.app')

@section('title', 'People')

@section('content')
    <h1>People</h1>
    <input type="text" id="search" class="form-control mb-3" placeholder="Search...">

    <table class="table table-striped" id="people-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Status</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td><a href="{{ route('people.show', $contact) }}">{{ $contact->Last_Name }}, {{ $contact->First_Name }}</a></td>
                    <td>
                        <a href="{{ route('donations.create', $contact) }}" class="btn btn-sm btn-outline-primary">Donate</a>
                        <a href="{{ route('participants.create', $contact) }}" class="btn btn-sm btn-outline-secondary">Register</a>
                    </td>
                    <td>{{ $contact->Date_of_Birth?->format('M j, Y') }}</td>
                    <td>{{ $contact->Gender }}</td>
                    <td>{{ $contact->Contact_Status }}</td>
                    <td>{{ $contact->Email_address }}</td>
                    <td>{{ $contact->Mobile_Phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
    <script>
        const search = document.getElementById('search');
        const rows = document.querySelectorAll('#people-table tbody tr');

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
