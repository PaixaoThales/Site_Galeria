<?php
@$con = mysql_connect('localhost', 'root', '');
	if(!mysql_select_db('bd_galeria', $con)){
		echo "Erro ao selecionar a base de dados";
	}
mysql_query("SET NAMES utf8");
?>