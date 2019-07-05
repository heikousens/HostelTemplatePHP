<?php
	include "header.php";
?>
<br/>
<br/>
<div class="container">
<div class="row">
<div class="col-xs-12">
	<h1>Lista de Clientes</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<p class="subtext">Aqui, você encontra todas as informações pertinentes ao funcionamento da <strong>Pousada Parnaioca</strong>.</p><br/>
		<br/>
		<div class="col-xs-12">
				<div class="col-xs-3">
				  <div class="panel-group">
					<div class="panel panel-default">
					  <a data-toggle="collapse" href="#collapse1"><div class="panel-heading" style="font: 19px Garamond; background-color: #00868B; color: #FFFFFF;">Informações de Clientes</div></a>
					  <div id="collapse1" class="panel-collapse collapse">
					  <div class="panel-body" style="font: 19px Garamond;"><a href="pesquisa.php">Buscar Cadastro</a></div>
					  <div class="panel-body" style="font: 19px Garamond;"><a href="listatodos.php">Clientes Cadastrados</a></div>
					  <div class="panel-body" style="font: 19px Garamond;"><a href="listaativos.php">Clientes Ativos</a></div>
					  </div>
					</div>
					<br/>
					<div class="panel panel-default">
					  <a data-toggle="collapse" href="#collapse2"><div class="panel-heading" style="font: 19px Garamond; background-color: #00868B; color: #FFFFFF;">Despesas de Clientes</div></a>
					  <div id="collapse2" class="panel-collapse collapse">
					  <div class="panel-body" style="font: 19px Garamond;"><a href="despesas.php">Registrar Despesas</a></div>
					  <div class="panel-body" style="font: 19px Garamond;"><a href="extrato.php">Calcular Extrato</a></div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-xs-9">
					<div class="thumbnail">
					<br/>
					<p style="font: 30px Garamond; font-weight: bold; color: #00868B;">Resultado da Pesquisa</p>
					<br/>
					<br/>

<?php 
	$chegadacli = $_POST["chegadacli"];
	$saidacli = $_POST["saidacli"];
    include("conexao.php");
	$sql = "SELECT idcliente,nomecli,chegadacli,saidacli,quarto FROM cadcliente INNER JOIN reserva ON idcliente = id_cliente WHERE chegadacli>='$chegadacli' and saidacli<='$saidacli'";
    $result = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($result) > 0){
        ?>
        <table class="table">
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
        echo "Nenhum Cliente hospedado no período selecionado!";
    }
?>
<a href="listaativos.php"><p class="subtext">Voltar e pesquisar outra data</p></a>
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