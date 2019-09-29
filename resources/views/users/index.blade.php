<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de usuários</title>
</head>
<body>
<a href="/interno">HOME</a><br>
<a href="#" onclick="history.back()">Voltar</a><br>
<a href="{{route('logout')}}">Sair</a><br><br>
<h1>LISTA DE USUÁRIOS</h1>
    @if(session('mensagem'))
    <br><br>{!! session('mensagem') !!}<br><br>
    @endif
<br>
<a href="{{route('users.create')}}">Novo usuário</a>
<br><br>
    <table>
        <thead>
            <tr>
                <td>Email</td>
                <td>Dt. Criação</td>
                <td>Dt. Atualização</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
        @if(!empty(count($users)))
            @foreach($users as $u)
                <tr>
                    <td>{{$u->email}}</td>
                    <td>{{$u->created_at->format('d/m/Y')}}</td>
                    <td>{{$u->updated_at->format('d/m/Y')}}</td>
                    <td>
                        <button type="button" onclick="window.location.href='{{route('users.edit',['user'=>$u])}}'">Editar</button>
                        <form action="/users/{{$u->id}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @else
            <tr><td colspan="5">Nenhum usuário</td></tr>
            @endif
        </tbody>
    </table>
</body>
</html>