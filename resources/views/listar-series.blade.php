<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Series</title>
</head>

<body>
    <h1>Series</h1>
    <ul>
        @foreach ($series as $serie)
            <li> {{ $serie }}</li>
        @endforeach
    </ul>
</body>

</html>
