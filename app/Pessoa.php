<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable =  ['nome','sobrenome','email','telefone','pessoajuridica','cpf','cnpj'];
}
