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
		<p class="subtext">Prezado funcionário, por favor, insira o código do cliente abaixo para registrar os gastos desse cliente.</p><br/>
		<br/>
		<div class="col-xs-12">
					<br/>
					<form class="form-horizontal" action="despesas2.php" method="POST">
					<div class="form-group">
							<label for="idcliente" class="col-xs-offset-3 col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Código do Cliente:</label>
							<div class="col-xs-3">
								<input type="number" class="form-control" id="idcliente" name="idcliente"/>
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

<br/>
<br/>
<br/>
<?php
	include "footer.php";
?>