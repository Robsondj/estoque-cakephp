<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
* 
*/
class ProdutosController extends AppController
{
	
	public function index()
	{
		$produtosTable = TableRegistry::get('Produtos');

		$produtos = $produtosTable->find('all');
		$this->set('produtos', $produtos);
	}

	public function novo() 
	{
		$produtosTable = TableRegistry::get('Produtos');

		$produto = $produtosTable->newEntity();

		$this->set('produto',$produto);
	}

	public function salva()
	{
		$produtosTable = TableRegistry::get('Produtos');

		$produto = $produtosTable->newEntity($this->request->data());

		if ($produtosTable->save($produto)) {
			$this->Flash->set("Produto salvo com sucesso", ['element' => 'success']);
		} else {
			$this->Flash->set("Erro ao salvar produto", ['element' => 'error']);
		}

		$this->redirect('produtos/index');
	}

	public function editar($id)
	{
		$produtosTable = TableRegistry::get('Produtos');

		$produto = $produtosTable->get($id);

		$this->set('produto', $produto);

		$this->render('novo');
	}

	public function apagar($id)
	{
		$produtosTable = TableRegistry::get('Produtos');

		$produto = $produtosTable->get($id);

		if ($produtosTable->delete($produto)) {
			$this->Flash->set("Produto removido com sucesso", ['element' => 'success']);
		} else {
			$this->Flash->set("Erro ao deletar produto", ['element' => 'error']);
		}

		$this->redirect('produtos/index');
	}
}