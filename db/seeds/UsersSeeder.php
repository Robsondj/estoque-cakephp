<?php

use Phinx\Seed\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

class UsersSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $hasher = new DefaultPasswordHasher();
        $password = $hasher->hash('123');
        $data = ['username' => 'robson', 'password' => $password];

        $users = $this->table('users');

        $users->insert($data)
              ->save();
    }
}
