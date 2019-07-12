<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Event\Event;

/**
* 
*/
class UsersController extends AppController
{
	
	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);

		$this->Auth->allow(['adiciona','salvar']);
	}

	public function adiciona()
	{
		$userTable = TableRegistry::get('Users');

		$user = $userTable->newEntity();
		
		$this->set('user',$user);
	}

	public function salvar()
	{
		$userTable = TableRegistry::get('Users');

		$user = $userTable->newEntity($this->request->data());

		if ($userTable->save($user)) {
			$this->Flash->set("Usuário salvo com sucesso", ['element' => 'success']);
		} else {
			$this->Flash->set("Erro ao salvar usuário", ['element' => 'error']);
		}

		$this->redirect('users/adiciona');
	}

	public function login()
	{
		if ($this->request->is('post')) {
			
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Flash->set('Usuário ou senha inválidos.',['element' => 'error']);
			}

		}
	}

	public function logout() 
	{
		return $this->redirect($this->Auth->logout());
	}
	
}