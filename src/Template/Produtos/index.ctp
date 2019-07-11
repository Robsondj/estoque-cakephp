<table>
	<thead>
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Preço</td>
			<td>Preço com desconto</td>
			<td>Descrição</td>
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
		</tr>
	<?php } ?>
	</tbody>
</table>
<?php
echo $this->Html->Link('Novo Produto',['controller' => 'produtos','action' => 'novo']);
?>