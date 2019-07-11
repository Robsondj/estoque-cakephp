<table>
	<thead>
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Preço</td>
			<td>Descrição</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach($produtos as $produto) { ?>
		<tr>
			<td><?= $produto['id'] ?></td>
			<td><?= $produto['nome'] ?></td>
			<td><?= $produto['preco'] ?></td>
			<td><?= $produto['descricao'] ?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>