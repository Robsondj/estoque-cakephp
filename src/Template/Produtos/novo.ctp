<?php
echo $this->Form->create($produto,['action' => 'salva']);
echo $this->Form->input('nome');
echo $this->Form->input('preco',['label' => 'Preço']);
echo $this->Form->input('descricao');
echo $this->Form->button('Salvar');
echo $this->Form->end();