<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Altera Telefone</title>
</head>
<body>
<a href="/interno">HOME</a><br>
<a href="#" onclick="history.back()">Voltar</a><br>
<a href="{{route('logout')}}">Sair</a><br><br>
<h1>Alterar Telefone</h1>
    @if(session('mensagem'))
    <br><br>{!! session('mensagem') !!}<br><br>
    @endif
    <form action="{{route('telefones.update',['telefone'=>$telefone])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label for="telefone">Telefone:</label><br>
        <input type="text" name="telefone" value="{{$telefone->telefone}}"><br>
        <hr>      

        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>