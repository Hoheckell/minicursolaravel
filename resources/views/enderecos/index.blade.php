<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Endereços</title>
</head>
<body>
    
<a href="/interno">HOME</a><br>
<a href="#" onclick="history.back()">Voltar</a><br>
<a href="{{route('logout')}}">Sair</a><br><br>
    <table>
        <thead>
            <tr>
                <td>Endereço</td>
                <td>Contato</td>
                <td>DT.Criação</td>
                <td>DT.Atualização</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
        @if(!empty(count($enderecos)))
            @foreach($enderecos as $e)
                <tr>
                    <td>{{$e->endereco}}</td>
                    <td><a href="{{route('contatos.show', ['contato'=>$e->contato])}}">{{$e->contato->nome}}</a></td>
                    <td>{{$e->created_at->format('d/m/Y')}}</td>
                    <td>{{$e->updated_at->format('d/m/Y')}}</td>
                    <td>
                        <button type="button" onclick="window.location.href='{{route('enderecos.edit',['endereco'=>$e])}}'">Editar</button>                        
                    </td>
                </tr>
            @endforeach
            @else
            <tr><td colspan="5">Nenhum endereço</td></tr>
            @endif
        </tbody>
    </table>
</body>
</html>