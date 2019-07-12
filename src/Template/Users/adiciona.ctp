<h1>Cadastro de Usuários</h1>
<?php
echo $this->Form->create($user,['action' => 'salvar']);
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->button('Salvar');
echo $this->Form->end();
?>