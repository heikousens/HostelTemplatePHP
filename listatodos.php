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
		<p class="subtext">Confira aqui a lista de todos os clientes cadastrados na <strong>Pousada Parnaioca</strong>.</p><br/>
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
					<p style="font: 30px Garamond; font-weight: bold; color: #00868B;">Lista de Clientes Cadastrados</p>
					<br/>
					<br/>

<?php 
    include("conexao.php");
	$sql = "SELECT idcliente,nomecli,cpfcli,emailcli,enderecocli FROM cadcliente";
    $result = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($result) > 0){
        ?>
        <table class="table">
            <tr>
				<th>Código</th>
                <th>Nome</th>
				<th>CPF</th>
				<th>E-mail</th>
				<th>Endereço</th>
            </tr>
        <?php
        while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
				<td><?php echo $row["idcliente"];?></td>
                <td><?php echo $row["nomecli"];?></td>
				<td><?php echo $row["cpfcli"];?></td>
				<td><?php echo $row["emailcli"];?></td>
				<td><?php echo $row["enderecocli"];?></td>
            </tr>
            <?php
        } echo "</table>";
    }else{
        echo "Nenhum Cliente hospedado no período selecionado!";
    }
?>
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