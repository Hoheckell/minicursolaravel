<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Telefones</title>
</head>
<body>
    
<a href="/interno">HOME</a><br>
<a href="#" onclick="history.back()">Voltar</a><br>
<a href="{{route('logout')}}">Sair</a><br><br>
    <table>
        <thead>
            <tr>
                <td>Telefone</td>
                <td>Contato</td>
                <td>DT.Criação</td>
                <td>DT.Atualização</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
        @if(!empty(count($telefones)))
            @foreach($telefones as $t)  
                <tr>
                    <td>{{$t->telefone}}</td>
                    <td><a href="{{route('contatos.show',['contatos'=>$t->contato])}}">{{$t->contato->nome}}</a></td>
                    <td>{{$t->created_at->format('d/m/Y')}}</td>
                    <td>{{$t->updated_at->format('d/m/Y')}}</td>
                    <td>
                        <button type="button" onclick="window.location.href='{{route('telefones.edit',['telefone'=>$t])}}'">Editar</button>                        
                    </td>
                </tr>
            @endforeach
            @else
            <tr><td colspan="5">Nenhum telefone</td></tr>
            @endif
        </tbody>
    </table>
</body>
</html>