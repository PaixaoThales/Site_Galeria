<?php
$con = mysqli_connect('localhost', 'root', '','',3308);
	if (mysqli_connect_errno()){
	    printf("A conexão falhou: %s\n", mysqli_connect_error());
	    exit();
	}
	if(!mysqli_select_db($con, 'bd_galeria')){
		echo "Erro ao selecionar a base de dados";
	}

mysqli_query($con,"SET NAMES utf8");
?>