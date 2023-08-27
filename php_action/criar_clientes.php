<?php

session_start();

require_once 'conexao_bd.php';

if (isset($_POST['btn-cadastrar'])) {

	$nome = mysqli_escape_string($connection, $_POST['nome']);
	$email = mysqli_escape_string($connection, $_POST['email']);
	$idade = mysqli_escape_string($connection, $_POST['idade']);

	$sql = "INSERT INTO alunos(nome,email,idade)VALUES('$nome','$email','$idade')";

	if (mysqli_query($connection, $sql)) {

		$_SESSION['mensagem'] = "Cadastrado com sucesso.";

		header('Location: ../index.php');
	} else {

		$_SESSION['mensagem'] = "Erro ao cadastrar.";

		header('Location: ../index.php');
	}
}
