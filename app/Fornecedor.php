<?php

namespace App;

class Fornecedor
{
    protected $table = "fornecedores";

    protected $fillable = [
        'nome', 'cnpj', 'endereco',
    ];

}