<?php
	include "header.php";
?>
<br/>
<br/>
<div class="container">
<div class="row">
<div class="col-xs-12">
	<h1>Login</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<br/>
			<div class="container">
				<div class="row">
				<div class="col-xs-offset-2 col-xs-9">
					<form class="form-horizontal" action="login2.php" method="POST">
						<div class="form-group">
							<label for="emailfunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Login:</label>
							<div class="col-xs-7">
								<input type="varchar" class="form-control" id="emailfunc" name="emailfunc" placeholder="Insira seu E-mail"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="senhafunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Senha:</label>
							<div class="col-xs-7">
								<input type="password" class="form-control" id="senhafunc" name="senhafunc" placeholder="Insira sua Senha"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<div class="col-xs-offset-6 col-xs-2">
								<button type="submit" class="btn" style="background-color: #00868B; color: #FFFFFF;">Entrar</button>
							</div>
							<div class="col-xs-offset-8 col-xs-2">
								<button type="reset" class="btn btn-default">Limpar</button>
							</div>
						</div>
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