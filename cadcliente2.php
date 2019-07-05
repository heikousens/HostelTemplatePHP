<?php 
include('conexao.php');
	$nome = $_POST["nomecli"];
	$sexo = $_POST["sexocli"];
	$cpf = $_POST["cpfcli"];
	$email = $_POST["emailcli"];
	$idade = $_POST["idadecli"];
	$endereco = $_POST["enderecocli"];
	$cep = $_POST["cepcli"];
	$cidade = $_POST["cidadecli"];
	$estado = $_POST["estadocli"];
	$pais = $_POST["paiscli"];
	$res = $_POST["rescli"];
	$cel = $_POST["celcli"];
	
	$sql = "insert into cadcliente values(null,'".$nome."','".$sexo."','".$cpf."','".$email."','".$idade."','".$endereco."','".$cep."','".$cidade."','".$estado."','".$pais."','".$res."','".$cel."')";
	
	if(mysqli_query($conexao, $sql)) {
		echo "<script>
	        alert('Cadastro efetuado com sucesso! Por favor, realize a reserva');
	        location.href='reserva.php';
	      </script>";
	}else{
		echo "<script>
	        alert('Não foi possível efetuar seu cadastro. Verifique novamente as informações inseridas.');
	        location.href='cadcliente.php';
	      </script>";
	}
	mysqli_close($conexao);
?>