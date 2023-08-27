<?php
//cabeçalho
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">

		<h3 class="light center">Novo Aluno</h3>
		<hr>

		<form action="php_action/criar_clientes.php" method="POST">

			<div class="input-field col s12">
				<i class="material-icons prefix">face</i>
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<i class="material-icons prefix">email</i>
				<input type="text" name="email" id="email">
				<label for="email">E-mail</label>
			</div>

			<div class="input-field col s12">
				<i class="material-icons prefix">calendar_month</i>
				<input type="text" name="idade" id="idade">
				<label for="idade">Idade</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn">
				<i class="material-icons right">send</i>
				Cadastrar
			</button>

			<a href="index.php" class="btn green">
				<i class="material-icons right">list</i>
				Listar alunos
			</a>

		</form>

	</div>
</div>


<?php

//rodapé

include_once 'includes/footer.php';


?>