<?php

namespace App\Controller;

/**
* 
*/
class ProdutosController extends AppController
{
	
	function index()
	{
		$produtos = [];
		$produtos[] = ["id" => 1,"nome" => "HD 20 gigas","preco" => 29.99,"descricao" => "HD muito bom da marca mega-HD"];
		$produtos[] = ["id" => 2,"nome" => "TV","preco" => 89.99,"descricao" => "TV muito boa da marca Sony"];
		$this->set('produtos', $produtos);
	}
}