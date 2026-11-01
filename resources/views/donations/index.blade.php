<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations</title>
</head>
<body>
    <h1>Donations</h1>

    <table>
        <thead>
            <tr>
                <th>Donation ID</th>
                <th>Donor ID</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donations as $donation)
                <tr>
                    <td>{{ $donation->Donation_ID }}</td>
                    <td>{{ $donation->Donor_ID }}</td>
                    <td>${{ number_format($donation->Donation_Amount, 2) }}</td>
                    <td>{{ $donation->Donation_Date?->format('M j, Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
