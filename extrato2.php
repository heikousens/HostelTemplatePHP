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
	<h1>Gerar Extrato de Consumo</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<p class="subtext">Por favor, confira os dados abaixo:</p><br/>
		<br/>
		<div class="col-xs-12">
		<div class="col-xs-offset-2 col-xs-8">

<?php 
	$idcliente = $_POST["idcliente"];
	$total = 0;
    include("conexao.php");
	$sql = "SELECT idcliente, nomecli,quarto,dias,diaria,restaurante,bar,spa,despesas,id_cliente FROM cadcliente INNER JOIN extrato ON idcliente = id_cliente WHERE idcliente = '$idcliente'";
    $result = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
        ?>
        <table class="table" align="center">
            <tr>
                <td class='subtext'>Nome:</td>
				<td class='subtext'><?php echo $row["nomecli"];?></td>
				</tr>
				<tr>
				<td class='subtext'>Quarto:</td>
				<td class='subtext'><?php echo $row["quarto"];?></td>
				</tr>
				<tr>
				<td class='subtext'>Duração da Estadia:</td>
				<td class='subtext'><?php echo $row["dias"];?> dias</td>
				</tr>
				<tr>
				<td class='subtext'>Valor da Diária:</td>
				<td class='subtext'>R$ <?php echo $row["diaria"];?></td>
				</tr>
				<tr>
				<td class='subtext'>Restaurante:</td>
				<td class='subtext'>R$ <?php echo $row["restaurante"];?></td>
				</tr>
				<tr>
                <td class='subtext'>Bar:</td>
				<td class='subtext'>R$ <?php echo $row["bar"];?></td>
				</tr>
				<tr>
                <td class='subtext'>SPA:</td>
				<td class='subtext'>R$ <?php echo $row["spa"];?></td>
				</tr>
				<tr>
				<td class='subtext'>Despesas Extras:</td>
				<td class='subtext'>R$ <?php echo $row["despesas"];?></td>
				</tr>
            <?php
			include('conexao.php');
					$totaldiaria = 0;
					$totalgastos = 0;
					$totalgeral = 0;						
						$sql2 = "SELECT nomecli,quarto,dias,diaria,restaurante,bar,spa,despesas,id_cliente FROM cadcliente INNER JOIN extrato ON idcliente = id_cliente WHERE idcliente='$idcliente'";
						$executa = mysqli_query($conexao, $sql2) or die (mysqli_error());
						$in      = mysqli_fetch_assoc($executa);
						$diaria = number_format ($in['diaria'], 2,',','.');
						$dias = $in['dias'];
					    $totaldiaria   = $in['diaria'] * $in['dias'] ;
						$restaurante = number_format ($in['restaurante'], 2,',','.');
						$bar = number_format ($in['bar'], 2,',','.');
						$spa = number_format ($in['spa'], 2,',','.');
						$despesas = number_format ($in['despesas'], 2,',','.');
						$totalgastos = $in['restaurante'] + $in['bar'] +$in['spa']+$in['despesas'] ;
						$totalgeral = number_format($totaldiaria+ $totalgastos, 2,',','.');
						
       
	   echo "<tr>
				<td><p class='subtext'><b>Total</b></p></td>
				<td><p class='subtext'><b>R$  $totalgeral</b></p></td>
				</tr>";
	 
	 echo "</table><br/>";
	
    }
	}else{
        echo "Não foi possível gerar o extrato!";
    }
?>
<br/>
<br/>
<a href="extrato.php"><p class="subtext">Voltar e gerar extrato para outro cliente</p></a>
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