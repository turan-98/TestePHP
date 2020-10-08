<?php 


function getConnection(){

	$dsn = 'mysql:host=localhost;dbname=pessoas';
	$user = 'root';
	$pass = '';

	try{
		$pdo =new PDO($dsn, $user, $pass);

		return $pdo;
	}catch(PDOException $e){
		echo 'Erro'.$ex->getMessage();
	}
}





?>