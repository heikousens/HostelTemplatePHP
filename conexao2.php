<?php
$servidor = 'localhost';
$usuario  = 'root';
$senha 	  = '';
$banco 	  = 'projetoint';
	try{
	  $conexao = new PDO('mysql:host='.$servidor.';dbname=projetoint', $usuario, $senha);  
	  
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>