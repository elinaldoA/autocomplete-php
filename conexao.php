<?php
	// Database configuration 
	$dbHost     = "localhost"; 
	$dbUsername = "root"; 
	$dbPassword = ""; 
	$dbName     = "agendasac"; 
	 
	// Criando conexão com o banco de dados
	$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
	 
	// Check connection 
	if ($con->connect_error) 
	{ 
	    die("Não foi possivel estabelecer a conexão com o banco: " . $con->connect_error); 
	}

?>