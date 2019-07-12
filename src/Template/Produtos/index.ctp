<table>
	<thead>
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Preço</td>
			<td>Preço com desconto</td>
			<td>Descrição</td>
			<td>Ações</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach($produtos as $produto) { ?>
		<tr>
			<td><?= $produto['id'] ?></td>
			<td><?= $produto['nome'] ?></td>
			<td><?= $this->Money->format($produto['preco']) ?></td>
			<td><?= $this->Money->format($produto->calculaDesconto()) ?></td>
			<td><?= $produto['descricao'] ?></td>
			<td><?= $this->Html->Link('Editar',['controller' => 'produtos', 'action' => 'editar', $produto['id']]); ?> | <?= $this->Form->postLink('Apagar',['controller' => 'produtos', 'action' => 'apagar', $produto['id']], ['confirm' => 'Tem certeza que deseja apagar o produto '.$produto['nome'].'?']); ?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<?php
echo $this->Html->Link('Novo Produto',['controller' => 'produtos','action' => 'novo']);
echo " | ";
echo $this->Html->Link('Logout',['controller' => 'users','action' => 'logout']);
?>