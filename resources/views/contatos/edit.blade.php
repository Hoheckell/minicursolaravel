<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="/interno">HOME</a><br>
<a href="#" onclick="history.back()">Voltar</a><br>
<a href="{{route('logout')}}">Sair</a><br><br>
<h1>CADASTRO DE CONTATO</h1>
    @if(session('mensagem'))
    <br><br>{!! session('mensagem') !!}<br><br>
    @endif
    <form action="{{route('contatos.update',['contato'=>$contato])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" value="{{$contato->nome}}" ><br>
        <hr>

        <label for="email">Email:</label><br>
        <input type="email" name="email"  value="{{$contato->email}}"><br>
        <hr>

        <label for="observacao">Observação:</label><br>
        <textarea name="observacao"> {{$contato->observacao}} </textarea> <br>
        <hr>

        <label for="UF">UF:</label><br>
        <select name="UF">
            <option value="">SELECIONE</option>
            <option value="NA" @if($contato->UF == "NA") selected @endif >NARNIA</option>
            <option value="MO" @if($contato->UF == "MO") selected @endif>MORDOR</option>
            <option value="CO" @if($contato->UF == "CO") selected @endif>CONDADO</option>
            <option value="GO" @if($contato->UF == "GO") selected @endif>GOTHAN</option>
            <option value="ME" @if($contato->UF == "ME") selected @endif>METROPOLIS</option>
            <option value="DX" @if($contato->UF == "DX") selected @endif>DIMENSÃO X</option>
        </select> 
        <hr>

        <label for="endereco">Endereço:</label><br>
        <textarea name="endereco">{{$contato->endereco->endereco}} </textarea> <br> 
        <hr>
        <label for="telefone">Telefone:</label><br>
        <input type="tel" name="telefone" value="{{$contato->telefone->telefone}}" > <br> 
        <hr>
        

        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>