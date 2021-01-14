<!doctype html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Gallery 42 - Desativados</title>
    <link rel="stylesheet" type="text/css" href="estilo/style.css"/>
	<link rel="shortcut icon" href="imgs/favicon.png"/>
	<script src="script/jquery-3.2.1.min.js"></script>
	<script src="script/jquery.validate.min.js"></script>
	<script src="script/script.js"></script>
</head>
<body>
	<header>
		<div id="logo">
			<img src="imgs/logo.png" alt="">
		</div>
		<nav>
			<ul>
				<li><a href="incluir.php" >Incluir</a></li>
				<li><a href="pesquisar.php" >Pesquisar</a></li>
				<li><a href="#" class="menu_ativo">Desativados</a></li>
			</ul>
		</nav>
	</header>
	<section class="scroll" id="pesquisar">
    	<h2>Desativados</h2>
		<div class="linhaSublinha"></div>
		<form method="post">
			<label for="texto" class="label">Pesquisar desativados:</label><input type="text" name="texto" id="texto" class="input" onkeyup="pesquisar(this.value, 0, 'Ativar', 'desativados.php')"/>
		</form>
		<div id="retorno"></div>
    </section>
</body>
</html>