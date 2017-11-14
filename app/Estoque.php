<?php

namespace App;

class Estoque
{
    protected $table = "estoques";

    protected $fillable = [
        'quantidade',
		'data_chegada',
		'data_vencimento',
		'data_fabricacao',
		'lote_produto'
		'produtos_idprodutos', 
    ];

    public function produtos()
    {
        $this->hasMany(Produto::class);
    }
}