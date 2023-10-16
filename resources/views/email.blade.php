<!DOCTYPE html>
<html>
<head>
    <title>Your Email Subject</title>
</head>
<body>
    <h1>You Received an Inquiry from: {{ $data['first_name'] }} {{ $data['last_name'] }}</h1>
    <h2> Please view the following Inquiry information and reply as soon as you can: </h2>

    <ul>
        <li><strong>Subject:</strong> {{ $data['subject'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
    </ul>

    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>

    <p>Thank you for Inquiring we will get you reply you back as soon as possible </p>
</body>
</html>
