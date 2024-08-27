<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<h1>Contact</h1>

    <p><b>Nom : </b> {{ $request['name'] }}</p>
    <p><b>Prénom : </b> {{ $request['prenom'] }}</p>
    <p><b>Email : </b> {{ $request['email'] }}</p>
    <p><b>Objet : </b> {{ $request['objet'] }}</p>
    <p><b>Message : </b> {{ $request['message'] }}</p>

</body>
</html>