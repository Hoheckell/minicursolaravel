<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Contatos</title>
</head>
<body>
    
<a href="/interno">HOME</a><br>
<a href="#" onclick="history.back()">Voltar</a><br>
<a href="{{route('logout')}}">Sair</a><br><br>
    @if(session('mensagem'))
    <br><br>{!! session('mensagem') !!}<br><br>
    @endif
<br>
<a href="{{route('contatos.create')}}">Novo contato</a>
<br><br>
    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Endereços</td>
                <td>Telefones</td>
                <td>Observações</td>
                <td>Email</td>
                <td>UF</td>
                <td>DT.Criação</td>
                <td>DT.Atualização</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody> 
        @if(!empty(count($contatos)))
            @foreach($contatos as $c)
                <tr>
                    <td>{{$c->nome}}</td>
                    <td>{{$c->endereco->endereco}}</td>
                    <td>{{$c->telefone->telefone}}</td>
                    <td>{{$c->observacao}}</td>
                    <td>{{$c->email}}</td>
                    <td>{{$c->UF}}</td>
                    <td>{{$c->created_at->format('d/m/Y')}}</td>
                    <td>{{$c->updated_at->format('d/m/Y')}}</td>
                    <td>
                        <button type="button" onclick="window.location.href='{{route('contatos.edit',['contato'=>$c])}}'">Editar</button>
                        <form action="{{route('contatos.destroy',['contato'=>$c])}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else 
            <tr><td colspan="9">Nenhum contato</td></tr>
        @endif
        </tbody>
    </table>
</body>
</html>