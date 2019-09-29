<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contatos;
use App\Enderecos;
use App\Telefones;

class ContatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contatos::all();
        return view('contatos.index',['contatos'=>$contatos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contatos.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contato =  new Contatos();
        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->UF = $request->UF;
        $contato->observacao = $request->observacao;
        $contato->endereco_id = Enderecos::create(['endereco'=>$request->endereco])->id;
        $contato->telefone_id = Telefones::create(['telefone'=>$request->telefone])->id;
        $contato->save();
        return redirect()->back()->with('mensagem','Contato criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contato = Contatos::find($id);
        return view('contatos.show',['contato'=>$contato]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contato = Contatos::find($id);
        return view('contatos.edit',['contato'=>$contato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $contato = Contatos::find($id);

        $endereco = Enderecos::find($contato->endereco_id);
        $endereco->endereco = $request->endereco;
        $endereco->save();

        $tel = Telefones::find($contato->telefone_id);
        $tel->telefone = $request->telefone;
        $tel->save();

        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->UF = $request->UF;
        $contato->observacao = $request->observacao;
        $contato->endereco_id = $endereco->id;
        $contato->telefone_id = $tel->id;
        $contato->save();

        return redirect()->back()->with('mensagem','Contato atualizado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contato = Contatos::find($id);
        Enderecos::destroy($contato->endereco->id);
        Telefones::destroy($contato->telefone->id);
        $contato->delete();
        return redirect()->back()->with('mensagem','Contato excluído com sucesso');
    }
}
