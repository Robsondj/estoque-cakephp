<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
* 
*/
class User extends Entity
{
	protected $_accessible = [
	    '*' => true,
	    'id' => false
	];

	protected function _setPassword($password)
	{
		$hasher = new DefaultPasswordHasher();
		return $hasher->hash($password);
	}
}