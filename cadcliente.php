<?php
	include "header.php";
?>
<br/>
<br/>
<div class="container">
<div class="row">
<div class="col-xs-12">
	<h1>Cadastrar Cliente</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<p class="subtext">Prezado funcionário, por favor, digite as informações do cliente no formulário abaixo. Caso o cliente já tenha cadastro, <a href="reserva.php"><u>clique aqui</u></a> para fazer a reserva. Para buscar informações de cadastro de algum cliente, <a href="pesquisa.php"><u>clique aqui</u></a>.</p><br/>
		<br>
		<div class="col-xs-12">
					<form class="form-horizontal" action="cadcliente2.php" method="POST">
						<div class="form-group">
							<label for="nomecli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Nome Completo:</label>
							<div class="col-xs-10">
								<input type="text" class="form-control" id="nomecli" name="nomecli"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group" id="sexocli">
							<label for="sexocli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Sexo:</label>
							<div class="col-xs-3">
								<label class="radio-inline control-label">
									<input type="radio" name="sexocli" id="sexocli" value="F" style="font: 1.2em Garamond; font-weight: bold;">Feminino
								</label>
								<label class="radio-inline control-label">
									<input type="radio" name="sexocli" id="sexocli" value="M" style="font: 1.2em Garamond; font-weight: bold;">Masculino
								</label>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="cpfcli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">CPF:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control" id="cpfcli" name="cpfcli"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="emailcli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Email:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control" id="emailcli" name="emailcli"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="idadecli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Data de Nascimento:</label>
							<div class="col-xs-3">
								<input type="date" class="form-control" id="idadecli" name="idadecli"/>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="enderecocli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Endereço:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control" id="enderecocli" name="enderecocli"/>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="cepcli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">CEP:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control" id="cepcli" name="cepcli"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="cidadecli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Cidade:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control" id="cidadecli" name="cidadecli"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="estadocli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Estado:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control" id="estadocli" name="estadocli"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="paiscli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">País:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control" id="paiscli" name="paiscli"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="rescli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Telefone Residencial:</label>
							<div class="col-xs-10">
								<input type="tel" class="form-control" id="rescli" name="rescli"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="celcli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Celular:</label>
							<div class="col-xs-10">
								<input type="tel" class="form-control" id="celcli" name="celcli"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<div class="col-xs-offset-3 col-xs-2">
								<button type="submit" class="btn" style="background-color: #00868B; color: #FFFFFF;">Cadastrar</button>
							</div>
							<div class="col-xs-2">
								<button type="reset" class="btn btn-muted">Limpar</button>
							</div>
						</div>
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