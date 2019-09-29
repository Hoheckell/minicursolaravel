<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo usuário</title>
</head>
<body>
<a href="/interno">HOME</a><br>
<a href="#" onclick="history.back()">Voltar</a><br>
<a href="{{route('logout')}}">Sair</a><br><br>
<h1>CADASTRO DE USUÁRIO</h1>
    @if(session('mensagem'))
    <br><br>{!! session('mensagem') !!}<br><br>
    @endif
    <form action="{{route('users.store')}}" method="POST">
        {{csrf_field()}}
        <label for="email">Email:</label><br>
        <input type="email" name="email" placeholder="email@email.com"><br>

        <label for="password">Senha:</label><br>
        <input type="password" name="password" ><br>

        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>