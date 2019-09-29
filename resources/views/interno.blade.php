<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CURSO DE LARAVEL</title>
</head>
<body>
    <h3>Olá,{{Auth()->user()->email}} seja bem vindo!</h3>
    <a href="{{route('logout')}}">Sair</a>
    <p>
        <ul>
            <li><a href="{{route('users.index')}}">Lista de Usuários</a></li>
            <li><a href="{{route('contatos.index')}}">Lista de Contatos</a></li>
            <li><a href="{{route('enderecos.index')}}">Lista de Endereços</a></li>
            <li><a href="{{route('telefones.index')}}">Lista de Telefones</a></li> 
        </ul>
    </p>
    <p>
        <ul>
            <li><a href="{{route('contatos.create')}}">Cadastrar contatos</a></li>
            <li><a href="{{route('users.create')}}">Cadastrar usuarios</a></li>
        </ul>
    </p>
</body>
</html>