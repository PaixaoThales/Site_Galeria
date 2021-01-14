<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Gallery 42 - Alterar</title>
	<link rel="stylesheet" type="text/css" href="estilo/style.css"/>
	<link rel="shortcut icon" href="imgs/favicon.png"/>
	<script src="script/jquery-3.2.1.min.js"></script>
	<script src="script/jquery.validate.min.js"></script>
	<script src="script/script.js"></script>
</head>
<body>
	<?php
		require("conectar.php");
		$codigo = $_GET['id_obra'];
		$busca = mysql_query("SELECT * FROM `tb_obradearte` WHERE `id_obra` = $codigo");
		$obra = mysql_fetch_array($busca);
		$destino = $obra['img'];
		$volta = $_GET['volta'];
	?>
	<header>
		<div id="logo">
			<img src="imgs/logo.png" alt="">
		</div>
		<nav>
			<ul>
				<li><a href="incluir.php">Incluir</a></li>
				<li><a href="pesquisar.php" >Pesquisar</a></li>
				<li><a href="desativados.php" >Desativados</a></li>
			</ul>
		</nav>
	</header>
	<section id="cadastrar" class="scroll">
		<h2>Alterar registro da obra "<?php echo "$obra[nome]"; ?>"</h2>
		<div class="linhaSublinha"></div>
		<form method="post"  enctype="multipart/form-data" id="formObras">
            <fieldset id="arte">
                <legend>Obra de Arte</legend>
                <label for="imagem"><div id="divimagem">Obra<input type="file" name="imagem" id="imagem"/></div></label><br>
               	<img id="imagem-antes"  /><br>
               		<hr>
                <div class="img-antiga">
            		<?php echo "<img src='$obra[img]?time=time()' alt='Foto de $obra[nome]' class='imagenss'/>";?>
                    <div class="img-antiga-x">X</div>
                </div>
                <input type="radio" name="genero" value="Pintura" id="pintura" class="input2" <?php if($obra['genero'] == "Pintura"){echo"checked";}?> /><label for="pintura" class="label2">Pintura</label>
                <input type="radio" name="genero" value="Escultura" id="escultura" class="input3" <?php if($obra['genero'] == "Escultura"){echo"checked";}?>/><label class="label2" for="escultura">Escultura</label><br/>
                <div id="div1">
                	<label  class="label" for="nome">Título:</label><input type="text" name="nome" id="nome" class="input" maxlength="25" value="<?php echo $obra['nome'];?>">
                	<label  class="label" for="autor">Autor:</label><input type="text" name="autor" id="autor" class="input" maxlength="25" value="<?php echo $obra['autor'];?>">
                	<label  class="label" for="ano">Ano:</label><input type="number" name="ano" id="ano" class="input" maxlength="25" value="<?php echo $obra['ano'];?>"><br />
                </div>
                <div id="div2">
                	<label  class="label" for="tecnica">Técnica Utilizada:</label><input type="text" name="tecnica" id="tecnica" class="input" maxlength="25" value="<?php echo $obra['tecnica'];?>">
                	<label  class="label" for="estilo">Estilo Artístico:</label><input type="text" name="estilo" id="estilo" class="input" maxlength="25" value="<?php echo $obra['estiloArtistico'];?>">
                </div>
           </fieldset>
           <input type="submit" value="Alterar" name="btCadastrar" id="btCadastrar">
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
			if($imagem['name']!= ""){
				move_uploaded_file($imagem['tmp_name'],$destino);
			}
			if(mysql_query("UPDATE `bd_galeria`.`tb_obradearte` SET `nome` = '$nome', `autor` = '$autor', `tecnica` = '$tecnica', `ano` = '$ano',`genero` = '$genero', `estiloArtistico` = '$estilo', `img` = '$destino' WHERE `tb_obradearte`.`id_obra` = $codigo;")){
				echo "<script> location.href='$volta'; </script>";
			}
		}
	?>
</body>
</html>