<?php
  	require('conectar.php');
	$texto = $_GET['texto'];
	$estado = $_GET['estado'];
	$condicao = $_GET['condicao'];
	$volta = $_GET['volta'];
	if($texto != ""){
		$busca = mysql_query("SELECT * FROM `tb_obradearte` WHERE `estado` = $estado AND (`nome` LIKE '%$texto%' OR `autor` LIKE '%$texto%' OR `ano` LIKE '%$texto%' OR `tecnica` LIKE '%$texto%' OR `genero` LIKE '%$texto%' OR `estiloArtistico` LIKE '%$texto%') ");
		while($obra = mysql_fetch_array($busca)){
			echo "<div class=box>";
			echo "<p ><span class=paragrafo1>Código:</span> $obra[id_obra]</p><br>";
			echo "<img src='$obra[img]?time=time()' alt='Foto da obra $obra[nome]' class='imagens'/><br>";
			echo "<div class=div3>";
			echo "<p><span class=paragrafo1>Título:</span> $obra[nome]</p>";
			echo "<p><span class=paragrafo1>Autor:</span> $obra[autor]</p>";
			echo "<p><span class=paragrafo1>Ano:</span> $obra[ano]</p>";
			echo "<p><span class=paragrafo1>Técnica Utilizada:</span> $obra[tecnica]</p>";
			echo "<p><span class=paragrafo1>Gênero:</span> $obra[genero]</p>";
			echo "<p><span class=paragrafo1>Estilo Artístico:</span> $obra[estiloArtistico]</p><br>";
			echo "</div>";
			echo "<a href=alterar.php?id_obra=$obra[id_obra]&volta=$volta class=button >Alterar Registro</a>";
			echo "<a href=estado.action.php?id=$obra[id_obra]&cond=$condicao class=button >$condicao Registro</a>";
			echo "</div>";
		}
	}	
?>