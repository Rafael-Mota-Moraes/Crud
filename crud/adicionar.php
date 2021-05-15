<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<form method="POST" action="adionar_submit.php">
	<h1>Adicionar.</h1>
	<input class="form-control mt-3" placeholder="*Nome" type="text" name="nome">
	<input class="form-control mt-3" placeholder="*E-mail" type="email" name="email" required>
	<input class="btn btn-danger mt-3 form-control" type="submit">
</form>

<style type="text/css">
	form{
		padding-top: 80px;
		text-align: center;
		max-width: 500px;
		margin: auto;
	}
</style>