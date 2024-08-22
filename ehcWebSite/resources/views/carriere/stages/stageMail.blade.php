<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage</title>
</head>
<body>
<h1><b>Stage : </b>{{ $stageName }}</h1>

    <p><b>Nom et prénom : </b> {{ $request['name'] }}</p>
    <p><b>Numéro du téléphone : </b> {{ $request['phone'] }}</p>
    <p><b>Objet : </b> {{ $request['subject'] }}</p>
    <p><b>Message : </b> {{ $request['message'] }}</p>

</body>
</html>