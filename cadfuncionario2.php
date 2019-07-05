<?php 
include('conexao.php');
	$nomefunc = $_POST["nomefunc"];
	$sexofunc = $_POST["sexofunc"];
	$cpffunc = $_POST["cpffunc"];
	$emailfunc = $_POST["emailfunc"];
	$idadefunc = $_POST["idadefunc"];
	$enderecofunc = $_POST["enderecofunc"];
	$cepfunc = $_POST["cepfunc"];
	$cidadefunc = $_POST["cidadefunc"];
	$estadofunc = $_POST["estadofunc"];
	$cargofunc = $_POST["cargofunc"];
	$resfunc = $_POST["resfunc"];
	$celfunc = $_POST["celfunc"];
	$senhafunc = md5($_POST["senhafunc"]);
	
	$sql = "insert into cadfuncionario values(null,'".$nomefunc."','".$sexofunc."','".$cpffunc."','".$emailfunc."','".$idadefunc."','".$enderecofunc."','".$cepfunc."','".$cidadefunc."','".$estadofunc."','".$cargofunc."','".$resfunc."','".$celfunc."','".$senhafunc."')";
	
	if(mysqli_query($conexao, $sql)) {
		echo "<script>
	        alert('Cadastro efetuado com sucesso! Seja bem-vindo à Pousada Parnaioca!');
	        location.href='pousadaparnaioca.php';
	      </script>";
	}else{
		echo "<script>
	        alert('Não foi possível efetuar seu cadastro. Verifique novamente as informações inseridas.');
	        location.href='cadfuncionario.php';
	      </script>";
	}
	mysqli_close($conexao);
?>