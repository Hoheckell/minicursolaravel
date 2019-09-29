<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição de usuário</title>
</head>
<body>
<a href="/interno">HOME</a><br>
<a href="#" onclick="history.back()">Voltar</a><br>
<a href="{{route('logout')}}">Sair</a><br><br>
    @if(session('mensagem'))
    <br><br>{!! session('mensagem') !!}<br><br>
    @endif
    <form action="{{route('users.update',['user'=>$user])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label for="email">Email:</label><br>
        <input type="email" name="email" value="{{$user->email}}"><br>

        <label for="password">Senha:</label><small><em>(Preencha somente se for alterar)</em></small><br>
        <input type="password" name="password" ><br>

        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>