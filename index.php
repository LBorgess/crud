<?php

include_once 'php_action/conexao_bd.php';

//cabeçalho
include_once 'includes/header.php';

include_once 'includes/mensagem.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light center">Alunos</h3>
		<hr>
		<table class="highlight">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>E-mail</th>
					<th>Idade</th>
				</tr>
				</>

			<tbody>
				<?php

				$sql = "SELECT * FROM alunos";

				$resultado = mysqli_query($connection, $sql);


				while ($dados = mysqli_fetch_array($resultado)) {

				?>

					<tr>
						<td><?php echo $dados['nome']; ?></td>
						<td><?php echo $dados['email']; ?></td>
						<td><?php echo $dados['idade']; ?></td>

						<td>
							<a href="alterar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange">
								<i class="material-icons">edit</i>
							</a>
						</td>

						<td>
							<a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger">
								<i class="material-icons">delete</i>
							</a>
						</td>

						<!-- Modal Structure in Materializecss -->
						<div id="modal<?php echo $dados['id']; ?>" class="modal">
							<div class="modal-content">
								<h4>Aviso.</h4>
								<p>Deseja excluir o aluno?</p>
							</div>
							<div class="modal-footer">


								<form action="php_action/excluir_cliente.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

									<button type="submit" name="btn-excluir" class="btn red">Excluir</button>

									<a href="#!" class="modal-close waves-effect waves-green btn">Cancelar</a>

								</form>
							</div>
						</div>

					</tr>

				<?php }

				?>

			</tbody>

		</table>
		<br>
		<div class="center">
			<a href="cadastrar.php" class="btn-small">
				<i class="material-icons left">add</i>
				Adicionar Aluno
			</a>
		</div>
	</div>
</div>


<?php

//rodapé

include_once 'includes/footer.php';


?>