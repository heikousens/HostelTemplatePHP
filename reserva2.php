<?php
	include "header.php";
?>

<?php 
include('conexao.php');
	$chegadacli = $_POST["chegadacli"];
	$saidacli = $_POST["saidacli"];
	$adultocli = $_POST["adultocli"];
	$criancacli = $_POST["criancacli"];
	$quarto = $_POST["quarto"];
	$obscli = $_POST["obscli"];
	$id_cliente = $_POST["id_cliente"];
	
	$sql2 = "insert into reserva values(null,'".$chegadacli."','".$saidacli."','".$adultocli."','".$criancacli."','".$quarto."','".$obscli."','".$id_cliente."')";
	
	if(mysqli_query($conexao, $sql2)) {
		echo "<script>
	        alert('Reserva efetuada com sucesso! Confira os dados abaixo antes de confirmar.');
	      </script>";
	}else{
		echo "<script>
	        alert('Não foi possível efetuar sua reserva. Verifique novamente as informações inseridas.');
			location.href='reserva.php';
	      </script>";
	}
	mysqli_close($conexao);
?>

<br/>
<br/>
<div class="container">
<div class="row">
<div class="col-xs-12">
	<h1>Confirmar Reserva</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<p class="subtext">Por favor, confirme os dados da reserva abaixo:</p><br/>
		<br/>
		<div class="col-xs-12">
			<?php
				include("conexao.php");
					$sql = "SELECT idcliente,nomecli,chegadacli,saidacli,adultocli,criancacli,quarto,obscli FROM cadcliente INNER JOIN reserva ON idcliente = id_cliente WHERE id_cliente='$id_cliente'";
					$result = mysqli_query($conexao, $sql);
					if(mysqli_num_rows($result) > 0){
			?>
        <table class="table">
            <tr>
                <th>Nome do Cliente:</th>
                <th>Data de Chegada:</th>
				<th>Data de Saída:</th>
				<th>Quantidade de Adultos:</th>
				<th>Quantidade de Crianças:</th>
				<th>Acomodação Escolhida:</th>
				<th>Observações Adicionais:</th>
            </tr>
        <?php
        while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["nomecli"];?></td>
				<td><?php echo $row["chegadacli"];?></td>
				<td><?php echo $row["saidacli"];?></td>
				<td><?php echo $row["adultocli"];?></td>
				<td><?php echo $row["criancacli"];?></td>
				<td><?php echo $row["quarto"];?></td>
				<td><?php echo $row["obscli"];?></td>
            </tr>
            <?php
        } echo "</table>";
    }else{
        echo "Houve um erro ao processar seu pedido. Por favor, verifique as informações inseridas";
    }    mysqli_close($conexao);
			?>
		<br/>
		<br/>
		<br/>
						<div class="form-group">
							<div class="col-xs-offset-4 col-xs-2">
								<a href="sucesso.php"><button type="submit" class="btn" name="submit" style="background-color: #00868B; color: #FFFFFF;">Confirmar Reserva</button></a>
							</div>
							<div class="col-xs-offset-1 col-xs-2">
								<a href="cadcliente.php"><button type="reset" class="btn btn-muted">Corrigir Informações</button></a>
							</div>
						</div>
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