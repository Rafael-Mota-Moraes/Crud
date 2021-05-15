<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
include("contato.class.php");
$contato = new Contato();
?>

<div class="top">
	<h1 >Contatos</h1>
	<a class="btn btn-primary mb-4 btn-contatos" href="adicionar.php">Adicionar contato</a>
</div>

<table class="table " border=1>
	<thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nome</th>
			<th scope="col">E-mail</th>
			<th scope="col">Ações</th>
		</tr>
	</thead>
	<?php
		$lista = $contato->getAll();
		foreach ($lista as $item):	
	?>
	
	<tbody>
		<tr>
			<td scope="row">
				<?= $item['id'] ?>	
			</td>
			<td>
				<?= $item['nome'] ?>
			</td>
			<td scope="row">
				<?= $item['email'] ?>
			</td>
			<td>
				<a class="btn btn-success m-1" href="editar.php?id=<?php echo $item['id']; ?>">
					Editar
				</a>
				<a class="btn btn-danger m-1" href="excluir.php?id=<?php echo $item['id']; ?>">
					Excluir
				</a>
			</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
</table>

<style type="text/css">
	.top{
		text-align: center;
		margin-top: 50px;
	}

	.btn-contatos{
		margin-top: 20px;
	}

	table{
		margin-top: 20px;
	}
</style>