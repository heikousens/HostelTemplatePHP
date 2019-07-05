<?php
	include "header.php";
?>
<br/>
<br/>
<div class="container">
<div class="row">
<div class="col-xs-12">
	<h1>Reservar Quarto</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<p class="subtext">Prezado Funcionário, por favor, preencha o formulário abaixo com os dados de reserva do cliente. Para conferir os tipos de acomodações disponíveis, <a href="acomodacoes.php"><u>clique aqui</u></a>. </p><br/>
		<br/>
		<div class="col-xs-12">
					<form class="form-horizontal" action="reserva2.php" method="POST">
						<div class="form-group">
							<label for="chegadacli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Data de Chegada:</label>
							<div class="col-xs-4">
								<input type="date" class="form-control" id="chegadacli" name="chegadacli"/>
							</div>
							<label for="saidacli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Data de Saída:</label>
							<div class="col-xs-4">
								<input type="date" class="form-control" id="saidacli" name="saidacli"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="adultocli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Adultos:</label>
							<div class="col-xs-2">
								<input type="number" class="form-control" id="adultocli" name="adultocli"/>
							</div>
							<label for="criancacli" class="col-xs-4 control-label" style="font: 1.2em Garamond; font-weight: bold;">Crianças:</label>
							<div class="col-xs-2">
								<input type="number" class="form-control" id="criancacli" name="criancacli"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="quartocli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Acomodação Desejada:</label>
							<div class="col-xs-8">
								<label class="radio-inline control-label">
									<input type="radio" name="quarto" id="quarto" value="lopesmendes" style="font: 1.2em Garamond; font-weight: bold;"> Suíte Lopes Mendes
								</label>
								<label class="radio-inline control-label">
									<input type="radio" name="quarto" id="quarto" value="parnaioca" style="font: 1.2em Garamond; font-weight: bold;"> Suíte Parnaioca
								</label>
								<label class="radio-inline control-label">
									<input type="radio" name="quarto" id="quarto" value="lagoaazul" style="font: 1.2em Garamond; font-weight: bold;"> Suíte Lagoa Azul 
								</label>
								<label class="radio-inline control-label">
									<input type="radio" name="quarto" id="quarto" value="apto" style="font: 1.2em Garamond; font-weight: bold;"> Apartamento Standard
								</label>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="obscli" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Observações Adicionais:</label>
							<div class="col-xs-10">
								<textarea class="form-control" rows="8" style="resize:none;" name="obscli"></textarea><br>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="id_cliente" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Código do Cliente:</label>
							<div class="col-xs-2">
								<input type="number" class="form-control" name="id_cliente"></textarea><br>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<div class="col-xs-offset-3 col-xs-2">
								<button type="submit" class="btn" name="submit" style="background-color: #00868B; color: #FFFFFF;">Reservar</button>
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