<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefones extends Model
{
    protected $table="telefones";
    protected $fillable = [
        'telefone'
    ];
    //protected $timestamps=false;

    public function contato()
    {
        return $this->belongsTo('App\Contatos','id','endereco_id');
    }
}
