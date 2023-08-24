<?php
//cabeçalho
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">

		<h3 class="light center"><b>Novo cliente</b></h3>
		<hr>

		<form action="php_action/criar_clientes.php" method="POST">

			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="email" id="email">
				<label for="email">E-mail</label>
			</div>

			<div class="input-field col s12">
				<input type="number" name="idade" id="idade">
				<label for="idade">Idade</label>
			</div>

			<div class="container center">

				<button type="submit" name="btn-cadastrar" class="btn blue accent-2">Cadastrar</button>

				<a href="index.php" class="btn green">Lista de clientes</a>

			</div>

		</form>

	</div>
</div>


<?php

//rodapé

include_once 'includes/footer.php';


?>