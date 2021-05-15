<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php

include("contato.class.php");
$contato = new Contato();
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$info = $contato->getInfo($id);
	if(empty($info['email'])){
		header("Location: index.php");
		exit;
	}
}else{
	header("Location: index.php");
	exit;
}


?>

<form method="POST" action="editar_submit.php">
	<input type="hidden" name="id" value="<?= $info['id'] ?>">
	<h1>Editar.</h1>
	<input class="form-control mt-3" placeholder="*Nome" type="text" name="nome" value="<?= $info['nome'] ?>">
	<input class="form-control mt-3" placeholder="*E-mail" type="email" name="email" value="<?= $info['email'] ?>" required>
	<input class="btn btn-danger mt-3 form-control" type="submit" value="Salvar">
</form>

<style type="text/css">
	form{
		padding-top: 80px;
		text-align: center;
		max-width: 500px;
		margin: auto;
	}
</style>