<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
	<?php

		require_once("config.php");		

		//carrega um usuario
		/*$root = new Usuario();
		$root->loadById(3);
		echo $root;*/
		
		//carrega uma lista de usuarios
		/*$lista = Usuario::getList();
		echo json_encode($lista);*/

		//carrega uma de lista de usuarios buscando pelo login
		/*$search = Usuario::search("U");
		echo json_encode($search);*/

		//carrega um usuario usando login e senha
		/*$usuario = new Usuario();
		$usuario->login("User","12345");
		echo $usuario;*/

		//Inserindo usuario novo
		/*$aluno = new Usuario("aluno2", "@lun02");

		$aluno->setDeslogin("aluno");
		$aluno->setDessenha("@lun0");

		$aluno->insert();

		echo $aluno;*/

		//Alterar um usuario
		/*$usuario = new Usuario();

		$usuario->loadById(6);

		$usuario->update("professor", "!@#$%");

		echo $usuario;*/

		//Delete de um usuario
		$usuario = new Usuario();
		$usuario->loadById(6);
		$usuario->delete();
		echo $usuario;

	?>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="index.php"><li>Cadastro</li></a>
				<a href="consultas.php"><li>Consultas</li></a>
			</ul>
		</nav>
		<section>
			<h1>Cadastro de Usuários</h1>
			<hr><br><br>

			<form method="post" action="carrega.php">
				<input type="submit" value="Salvar" class="btn">
				<input type="reset" value="Limpar" class="btn">
				<br><br>

				Nome<br>
				<input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
				Email<br>
				<input type="email" name="Email" class="campo" maxlength="50" required><br>
				Profissão<br>
				<input type="text" name="Profissao" class="campo" maxlength="40" required><br>
			</form>
		</section>
	</div>
</body>
</html>
