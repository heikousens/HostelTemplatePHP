<?php
	include "header.php";
?>
<script>
	
</script>
<br/>
<br/>
<div class="container">
<div class="row">
<div class="col-xs-12">
	<h1>Registrar Despesas</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<p class="subtext">Por favor, confira os dados abaixo:</p><br/>
		<br/>
		<div class="col-xs-12">

<?php 
	$quarto = $_POST["quarto"];
	$dias = $_POST["dias"];
	$diaria = $_POST["diaria"];
	$restaurante = $_POST["restaurante"];
	$bar = $_POST["bar"];
	$spa = $_POST["spa"];
	$despesas = $_POST["despesas"];
	$id_cliente = $_POST["id_cliente"];
	$total = 0;
    include("conexao.php");
	$sql = "INSERT INTO extrato VALUES (null,'".$quarto."','".$dias."','".$diaria."','".$restaurante."','".$bar."','".$spa."','".$despesas."','".$id_cliente."')";
    if(mysqli_query($conexao, $sql)) {
		echo "<script>
	        alert('Despesas registradas com sucesso!');
	        location.href='relatorios.php';
	      </script>";
	}else{
		echo "<script>
	        alert('Não foi possível registrar as despesas. Verifique novamente as informações inseridas.');
	        location.href='despesas.php';
	      </script>";
	}
	mysqli_close($conexao);
	
?>
	</div>
</div>
</div>
</div>
</div>

<br/>
<br/>
<br/>
<?php
	include "footer.php";
?>