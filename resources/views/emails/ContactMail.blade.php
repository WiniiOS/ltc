<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>
<body>
    <h1>Message de Contact LTC Group Sarl</h1>
    <p>Name : {{ $data['name'] }}</p>
    <p>Email : {{ $data['email'] }}</p>
    <p>Sujet : {{ $data['subject'] }}</p>
    <p>Message : {{ $data['message'] }}</p>
</body>
</html>