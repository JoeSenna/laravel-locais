<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locais</title>
</head>
<body>
    <h1>Locais</h1>
    <a href="/places/create">Criar Local</a>
    <hr>

    @foreach($places as $place)

        <a href="/places/show/{{ $place->id }}">{{ $place->name }}<br><br></a>
        @endforeach
</body>
</html>