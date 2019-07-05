<?php
	include "header.php";
?>
<br/>
<br/>
<div class="container">
<div class="row">
<div class="col-xs-12">
	<h1>Pesquisar Cadastro</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<p class="subtext">Para buscar as informações cadastrais de algum cliente, insira o e-mail do cliente abaixo:</p><br/>
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
					<p class="subtext">Por favor, digite o e-mail do cliente abaixo:</p>
					<br/>
					<form class="form-horizontal" action="pesquisa2.php" method="POST">
					<div class="form-group">
							<label for="emailcli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">E-mail:</label>
							<div class="col-xs-8">
								<input type="email" class="form-control" id="emailcli" name="emailcli"/>
							</div>
					</div>
					<p>&nbsp;</p>
					<div class="form-group">
							<div class="col-xs-offset-5 col-xs-2">
								<button type="submit" class="btn" style="background-color: #00868B; color: #FFFFFF;">Procurar</button>
							</div>
							<div class="col-xs-2">
								<button type="reset" class="btn btn-muted">Limpar</button>
							</div>
						</div>
						<br/>
						<br/>
					</form>
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