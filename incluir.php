<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Gallery 42 - Incluir</title>
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
				<li><a href="#" class="menu_ativo">Incluir</a></li>
				<li><a href="pesquisar.php" >Pesquisar</a></li>
				<li><a href="desativados.php" >Desativados</a></li>
			</ul>
		</nav>
	</header>
	<section id="cadastrar" class="scroll">
		<h2>Incluir</h2>
		<div class="linhaSublinha"></div>
		<form method="post"  enctype="multipart/form-data" id="formObras">
            <fieldset id="arte">
                <legend>Obra de Arte</legend>
                <label for="imagem"><div id="divimagem">Obra<input type="file" name="imagem" id="imagem"/></div></label><br>
               	<img id="imagem-antes"  /><br>
                <input type="radio" name="genero" value="Pintura" id="pintura" class="input2"/><label for="pintura" class="label2">Pintura</label>
                <input type="radio" name="genero" value="Escultura" id="escultura" class="input3"/><label class="label2" for="escultura">Escultura</label><br/>
                <div id="div1">
                	<label  class="label" for="nome">Título:</label><input type="text" name="nome" id="nome" class="input" maxlength="25">
                	<label  class="label" for="autor">Autor:</label><input type="text" name="autor" id="autor" class="input" maxlength="25">
                	<label  class="label" for="ano">Ano:</label><input type="number" name="ano" id="ano" class="input" maxlength="25"><br />
                </div>
                <div id="div2">
                	<label  class="label" for="tecnica">Técnica Utilizada:</label><input type="text" name="tecnica" id="tecnica" class="input" maxlength="25">
                	<label  class="label" for="estilo">Estilo Artístico:</label><input type="text" name="estilo" id="estilo" class="input" maxlength="25">
                </div>
           </fieldset>
           <input type="submit" value="Cadastrar" name="btCadastrar" id="btCadastrar">
		</form>
	</section>
	<?php
		require('conectar.php');
    	if(isset($_POST['btCadastrar'])){	
			$nome = $_POST['nome'];	
			$autor = $_POST['autor'];
			$tecnica = $_POST['tecnica'];
			$ano = $_POST['ano'];
			$genero = $_POST['genero'];
			$estilo = $_POST['estilo'];
			$imagem = $_FILES['imagem'];
			$nome_arquivo = md5(time().$imagem['size']).".jpg";
			$destino = "obras/$nome_arquivo";
			move_uploaded_file($imagem['tmp_name'],$destino);
			mysql_query("INSERT INTO `bd_galeria`.`tb_obradearte` (`id_obra`, `nome`, `autor`, `tecnica`, `ano`, `genero`, `estiloArtistico`, `estado`, `img`) VALUES (NULL, '$nome', '$autor', '$tecnica', '$ano', '$genero', '$estilo', '1', '$destino');");
		}
	?>
</body>
</html>