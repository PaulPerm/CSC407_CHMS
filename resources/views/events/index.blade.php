@extends('layouts.app')

@section('title', 'Events')

@section('content')
    <h1>Events</h1>
    <input type="text" id="search" class="form-control mb-3" placeholder="Search...">

    <div class="table-responsive">
        <table class="table table-striped" id="event-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Start</th>
                    <th>End</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->Event_Title }}</td>
                        <td title="{{ $event->Event_Description }}">{{ Str::limit($event->Event_Description, 100) }}</td>
                        <td class="text-nowrap">{{ $event->Event_Start_Date?->format('M j, Y g:i A') }}</td>
                        <td class="text-nowrap">{{ $event->Event_End_Date?->format('M j, Y g:i A') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        const search = document.getElementById('search');
        const rows = document.querySelectorAll('#event-table tbody tr');

        search.addEventListener('input', () => {
            const term = search.value.toLowerCase();

            rows.forEach(row => {
                const current_row = row.textContent.toLowerCase();
                if (current_row.includes(term)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
@endpush
