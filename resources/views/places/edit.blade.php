<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locais</title>
</head>
<body>
    <h1>Editar Local</h1>
    <form action="/places/update/{{ $place->id }}" method="post">
        @csrf
        <input name="name" placeholder="Nome" value="{{ $place->name }}">
        <br><br>
        <textarea name="description" placeholder="Descrição" rows="4">{{ $place->description }}</textarea><br><br>
        <input type="text" name="address" placeholder="Endereço"  value="{{ $place->address }}"><br><br>
        <input type="submit" value="Enviar">
        <a href="/places/destroy/{{ $place->id }}"><button>Deletar</button></a>
        <a href="/places/"><button>Voltar</button></a>
    </form>
</body>
</html>