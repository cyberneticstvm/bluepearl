<!DOCTYPE html>
<html>

<head>
    <title>Blue Pearl General Trading - Contact Form Submit</title>
</head>

<body>
    Dear Team,<br /><br />

    <p>Contact Form has been subitted with below details.</p>

    <p>Name: {{ $name }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Contact Number: {{ $data['number'] }}</p>
    <p>Message: {{ $data['message'] }}</p>

    Regards,<br />
    Blue Pearl Web.
</body>

</html>