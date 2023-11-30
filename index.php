<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" />
	<title>PROGRAMACAO WEB</title>
</head>
<body>
	<nav class="navbar">
		<!-- LOGO -->
		<div class="logo">CRUD USUÁRIOS</div>

		<!-- NAVIGATION MENU -->
		<ul class="nav-links">
			<!-- NAVIGATION MENUS -->
			<div class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="?page=novo">Novo usuário</a></li>
				<li><a href="?page=listar">Listar usuário</a></li>
				<li><a href="?page=buscar">Buscar um usuário</a></li>
			</div>
		</ul>
	</nav>

	<div class="container">
		<div class="row">
			<div class="home">
				<?php
					include("config.php");
					switch (@$_REQUEST["page"]) {
						case "novo":
							include("novo-usuario.php");
							break;
						case "listar":
							include("listar-usuario.php");
							break;
						case "buscar":
							include("buscar-usuario.php");
							break;
						case "utils":
							include("utils-usuario.php");
							break;
						case "editar":
							include("editar-usuario.php");
							break;
						default:
						print("<h1 class='title'>Bem vindo!</h1>");
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>
