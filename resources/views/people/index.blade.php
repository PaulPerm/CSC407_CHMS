<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People</title>
</head>
<body>
    <h1>People</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
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
                    <td>{{ $contact->Last_Name }}, {{ $contact->First_Name }}</td>
                    <td>{{ $contact->Date_of_Birth?->format('M j, Y') }}</td>
                    <td>{{ $contact->Gender }}</td>
                    <td>{{ $contact->Contact_Status }}</td>
                    <td>{{ $contact->Email_address }}</td>
                    <td>{{ $contact->Mobile_Phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
