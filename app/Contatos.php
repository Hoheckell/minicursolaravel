<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    protected $table="contatos"; 
    protected $fillable = [
        'nome',
        'email',
        'endereco_id',
        'telefone_id',
        'observacao',
        'UF'
    ];


    public function endereco(){
        return $this->hasOne("App\Enderecos",'id','endereco_id');
    }

    public function telefone(){
        return $this->hasOne("App\Telefones",'id','telefone_id');
    }

    
}
