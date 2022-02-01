<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locais</title>
</head>
<body>
    <h1>Local</h1>
    <ul>
        <li>Nome: {{ $place->name }}</li>
        <li>Descrição: {{ $place->description }}</li>
        <li>Endereço: {{ $place->address }}</li>
    </ul>

    <a href="/places/edit/{{ $place->id }}"><button>Editar</button></a>
    <a href="/places/delete/{{ $place->id }}"><button>Deletar</button></a>
    <a href="/places/"><button>Voltar</button></a>
    
</body>
</html>