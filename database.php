<?php 
	error_reporting(2);
	$mysql = new mysqli("localhost","root"); 

	$sql = "create database laravel_project_new";

	if ($mysql->query($sql) == true) {
		echo "Database create successfully";
	}else {
		echo "ERRO: Could not able to excute $sql".$mysql->erro;
	}


?>