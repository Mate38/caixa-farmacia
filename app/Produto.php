<?php

namespace App;

class Produto
{
    protected $table = "produtos";

    protected $fillable = [
        'nome',
		'valor',
		'descricao',
		'classificacao', 
		'unidade_comp', 
		'quantidade_comp', 
		'nome_generico', 
		'fornecedor_idfornecedor', 
    ];
    
}