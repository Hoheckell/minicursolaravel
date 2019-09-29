<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Contato</title>
</head>
<body>
<a href="/interno">HOME</a><br>
<a href="#" onclick="history.back()">Voltar</a><br>
<a href="{{route('logout')}}">Sair</a><br><br>
<h1>CADASTRO DE CONTATO</h1>
    @if(session('mensagem'))
    <br><br>{!! session('mensagem') !!}<br><br>
    @endif
    <form action="{{route('contatos.store')}}" method="POST">
        {{csrf_field()}}
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" ><br>
        <hr>

        <label for="email">Email:</label><br>
        <input type="email" name="email" placeholder="email@email.com"><br>
        <hr>

        <label for="observacao">Observação:</label><br>
        <textarea name="observacao">Observação</textarea> <br>
        <hr>

        <label for="UF">UF:</label><br>
        <select name="UF">
            <option value="">SELECIONE</option>
            <option value="NA">NARNIA</option>
            <option value="MO">MORDOR</option>
            <option value="CO">CONDADO</option>
            <option value="GO">GOTHAN</option>
            <option value="ME">METROPOLIS</option>
            <option value="DX">DIMENSÃO X</option>
        </select> 
        <hr>

        <label for="endereco">Endereço:</label><br>
        <textarea name="endereco">Endereço </textarea> <br> 
        <hr>
        <label for="telefone">Telefone:</label><br>
        <input type="tel" name="telefone" > <br> 
        <hr>
        

        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>