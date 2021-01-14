<?php
  	require('conectar.php');
	$id = $_GET['id'];
	$cond = $_GET['cond'];
	if($cond == "Desativar"){
		if(mysql_query("UPDATE `bd_galeria`.`tb_obradearte` SET `estado` = '0' WHERE `tb_obradearte`.`id_obra` = '$id';")){
			echo "<script> location.href='pesquisar.php';   </script>";
		}
	}else{
		if(mysql_query("UPDATE `bd_galeria`.`tb_obradearte` SET `estado` = '1' WHERE `tb_obradearte`.`id_obra` = '$id';")){
			echo "<script> location.href='desativados.php';   </script>";
		}
	}
?>
