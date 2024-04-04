<?php 
	$localhost = "localhost";
	$user = "root";
	$passw = "";
	$banco = "orbat";

	global $pdo;
	global $conn;
	try{
		$pdo = new PDO("mysql:dbname=".$banco.";host=".$localhost, $user, $passw);
		$conn = new PDO("mysql:dbname=".$banco.";host=".$localhost, $user, $passw);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Erro: ". $e->getMessage();
		exit;
	}
	require_once 'CRUD.php';
	$Sistema = new Sistema;
	$hoje = date("Y-m-d");

?>