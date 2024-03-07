<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testando routes</h1>
    <!-- Recebendo por parametro -->
    <p> </p> <!-- Voce coloca a variavel em que o id está recebendo da routes -->
    <p> </p> <!-- Voce coloca a variavel em que o NOME está recebendo da routes -->

    <!-- Recebendo por parametro -->
    <a href="{{ route('home-index') }}">Clique aqui</a>

    <h3>Recebendo a variavel do controller</h3>
    <p>Nome: {{ $nome }}</p>
    <p>Id: {{ $id }}</p>

</body>
</html>