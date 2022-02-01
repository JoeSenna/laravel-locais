<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locais</title>
</head>
<body>
    <h1>Criar Local</h1>
    <form action="/places/store" method="post">
        @csrf
        <input name="name" placeholder="Nome">
        <input name="description" placeholder="Descrição" rows="4"></textarea>
        <input type="text" name="address" placeholder="Endereço">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>