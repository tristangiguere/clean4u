<!DOCTYPE html>

<html>

<head>

    <title>Clean4U Email Template</title>

</head>

<body>
    <h1>New message from the Clean4U website</h1>
    <p><strong>Sent from:</strong> {{ $data['name'] }} ({{ $data['email'] }})</p>
    <p><strong>Sent on:</strong> {{ $data['date'] }}</p>
    <hr>
    <p>{{ $data['message'] }}</p>

</body>

</html>