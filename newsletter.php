<?php 
include('conexao.php');
	$emailnews = $_POST["emailnews"];
	
	$sql = "insert into newsletter values(null,'".$emailnews."')";
	
	if(mysqli_query($conexao, $sql)) {
		echo "<script>
	        alert('E-mail registrado com sucesso!');
	        location.href='pousadaparnaioca.php';
	      </script>";
	}else{
		echo "<script>
	        alert('Não foi possível efetuar o cadastro. Verifique se foi inserido um e-mail válido.');
	        location.href='pousadaparnaioca.php';
	      </script>";
	}
	mysqli_close($conexao);
?>