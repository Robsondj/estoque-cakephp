<?php

namespace App\Controller;

/**
* 
*/
class ProdutosController extends AppController
{
	
	function index()
	{
		$msg = "Bem vindo Produtos";
		$this->set('msg', $msg);
	}
}