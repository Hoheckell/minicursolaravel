<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    protected $table="enderecos";
    protected $fillable = [
        'endereco'
    ];

    public function contato()
    {
        return $this->belongsTo('App\Contatos','id','endereco_id');
    }
}
