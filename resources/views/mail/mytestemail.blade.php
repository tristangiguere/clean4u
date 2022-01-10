<!DOCTYPE html>

<html>

<head>

    <title>Mozart Email Template</title>

</head>

<body>
    <h1>New message from the Mozart website</h1>
    <p><strong>Sent from:</strong> {{ $data['name'] }} ({{ $data['email'] }})</p>
    <p><strong>Sent on:</strong> {{ $data['date'] }}</p>
    <hr>
    <p>{{ $data['message'] }}</p>

</body>

</html>