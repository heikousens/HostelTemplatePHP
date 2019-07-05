<?php
	include "header.php";
?>
<br/>
<br/>
<div class="container">
<div class="row">
<div class="col-xs-12">
	<h1>Registrar Despesas</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<p class="subtext">Por favor, preencha o formulário com os dados abaixo:</p><br/>
		<br/>
		<div class="col-xs-12">

<?php
	$idcliente = $_POST["idcliente"];
    include("conexao.php");
	$sql = "SELECT idcliente,nomecli,chegadacli,saidacli,quarto FROM cadcliente INNER JOIN reserva ON idcliente = id_cliente WHERE idcliente='$idcliente'";
    $result = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($result) > 0){
        ?>
        <table class="table" align="center">
            <tr>
				<th>Código</th>
                <th>Nome</th>
                <th>Data de Chegada</th>
				<th>Data de Saída</th>
				<th>Quarto</th>
            </tr>
        <?php
        while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
				<td><?php echo $row["idcliente"];?></td>
                <td><?php echo $row["nomecli"];?></td>
				<td><?php echo $row["chegadacli"];?></td>
				<td><?php echo $row["saidacli"];?></td>
				<td><?php echo $row["quarto"];?></td>
            </tr>
            <?php
        } echo "</table>";
    }else{
        echo "Nenhum Cliente selecionado!";
    }
?>
<br/>
<br/>
	<form class="form-horizontal" action="despesas3.php" method="POST" align="center">
					<div class="form-group">
							<label for="restaurante" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Acomodação Escolhida:</label>
							<div class="col-xs-8">
								<select class="form-control required" name="quarto" id="quarto">
									<option value="selecione">Selecione...</option>
									<option value="lopesmendes">Suíte Lopes Mendes</option>
									<option value="parnaioca">Suíte Parnaioca</option>
									<option value="lagoaazul">Suíte Lagoa Azul</option>
									<option value="apto">Apartamento Standard</option>
								</select>
							</div>
					</div>
					<p>&nbsp;</p>
					<div class="form-group">
							<label for="dias" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Número de Diárias:</label>
							<div class="col-xs-8">
								<input type="text" class="form-control" id="dias" name="dias"/>
							</div>
					</div>
					<p>&nbsp;</p>
					<div class="form-group">
							<label for="diaria" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Valor da Diária:</label>
							<div class="col-xs-8">
								<select class="form-control required" name="diaria" id="diaria">
									<option value="selecione">Selecione...</option>
									<option value="300">R$ 300,00</option>
									<option value="350">R$ 350,00</option>
									<option value="400">R$ 400,00</option>
									<option value="200">R$ 200,00</option>
								</select>
							</div>
					</div>
					<p>&nbsp;</p>
					<div class="form-group">
							<label for="restaurante" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Gastos no Restaurante:</label>
							<div class="col-xs-8">
								<input type="text" class="form-control" id="restaurante" name="restaurante"/>
							</div>
					</div>
					<p>&nbsp;</p>
					<div class="form-group">
							<label for="bar" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Gastos no Bar:</label>
							<div class="col-xs-8">
								<input type="text" class="form-control" id="bar" name="bar"/>
							</div>
					</div>
					<p>&nbsp;</p>
					<div class="form-group">
							<label for="spa" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Gastos no SPA:</label>
							<div class="col-xs-8">
								<input type="text" class="form-control" id="spa" name="spa"/>
							</div>
					</div>
					<p>&nbsp;</p>
					<div class="form-group">
							<label for="despesas" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Despesas Extras:</label>
							<div class="col-xs-8">
								<input type="text" class="form-control" id="despesas" name="despesas"/>
							</div>
					</div>
					<p>&nbsp;</p>
					<div class="form-group">
							<label for="id_cliente" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Código do Cliente:</label>
							<div class="col-xs-8">
								<input type="number" class="form-control" id="id_cliente" name="id_cliente"/>
							</div>
					</div>
					<p>&nbsp;</p>
					<div class="form-group">
							<div class="col-xs-offset-5 col-xs-2">
								<button type="submit" class="btn" style="background-color: #00868B; color: #FFFFFF;">Gerar Extrato</button>
							</div>
							<div class="col-xs-2">
								<button type="reset" class="btn btn-muted">Limpar</button>
							</div>
						</div>
						<br/>
						<br/>
					</form>
<a href="extrato.php"><p class="subtext">Voltar e gerar extrato para outro cliente</p></a>
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