<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatos</title>
</head>
<body>
    
<a href="/interno">HOME</a><br>
<a href="#" onclick="history.back()">Voltar</a><br>
<a href="{{route('logout')}}">Sair</a><br><br>
   
   Nome:{{$contato->nome}}<br>
   Endereço:{{$contato->endereco->endereco}}<br>
   Telefone:{{$contato->telefone->telefone}}<br>
   Email:{{$contato->email}}<br>
   Observação :{{$contato->observacao}}<br>
   UF:{{$contato->UF}}<br>
   DT. Criação:{{$contato->created_at->format('d/m/Y')}}<br>
   DT. Atualização:{{$contato->updated_at->format('d/m/Y')}}<br>

</body>
</html>