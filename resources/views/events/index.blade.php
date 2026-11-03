@extends('layouts.app')

@section('title', 'Events')

@section('content')
    <h1>Events</h1>

    <table class="table table-striped">
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
                    <td>{{ $event->Event_Description }}</td>
                    <td>{{ $event->Event_Start_Date?->format('M j, Y g:i A') }}</td>
                    <td>{{ $event->Event_End_Date?->format('M j, Y g:i A') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

