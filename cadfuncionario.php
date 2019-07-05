<?php
	include "header.php";
?>
<script>
	function check_form(){
		var inputs = document.getElementsByClassName('required');
	  var len = inputs.length;
	  var valid = true;
	  for(var i=0; i < len; i++){
		 if (!inputs[i].value){ valid = false; }
	  }
	  if (!valid){
		alert('Por favor, preencha todos os campos do formulário.');
		return false;
	  } else { return true; }
	}
</script>

<br/>
<br/>
<div class="container">
<div class="row">
<div class="col-xs-12">
	<h1>Cadastrar Novo Funcionário</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<p class="subtext">Seja bem-vindo(a) à equipe da Pousada Parnaioca! É um prazer tê-lo(a) aqui conosco! Por favor, preencha as informações do formulário abaixo:</p><br/>
		<br/>
		<div class="col-xs-12">
					<form class="form-horizontal" action="cadfuncionario2.php" method="POST" onsubmit="return check_form()">
						<div class="form-group">
							<label for="nomefunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Nome Completo:</label>
							<div class="col-xs-10">
								<input type="text" class="form-control required" id="nomefunc" name="nomefunc"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group" id="sexofunc" name="sexofunc">
							<label for="sexofunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Sexo:</label>
							<div class="col-xs-3">
								<label class="radio-inline control-label">
									<input type="radio" class="required" name="sexofunc" id="sexofunc" value="F" style="font: 1.2em Garamond; font-weight: bold;">Feminino
								</label>
								<label class="radio-inline control-label">
									<input type="radio" class="required" name="sexofunc" id="sexofunc" value="M" style="font: 1.2em Garamond; font-weight: bold;">Masculino
								</label>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="cpffunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">CPF:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control required" id="cpffunc" name="cpffunc"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="emailfunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Email:</label>
							<div class="col-xs-10">
								<input type="email" class="form-control required" id="emailfunc" name="emailfunc"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="idadefunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Data de Nascimento:</label>
							<div class="col-xs-3">
								<input type="date" class="form-control required" id="idadefunc" name="idadefunc"/>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="enderecofunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Endereço:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control required" id="enderecofunc" name="enderecofunc"/>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="cepfunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">CEP:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control required" id="cepfunc" name="cepfunc"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="cidadefunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Cidade:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control required" id="cidadefunc" name="cidadefunc"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="estadofunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Estado:</label>
							<div class="col-xs-3">
								<select class="form-control required" name="estadofunc" id="estadofunc" name="estadofunc">
									<option value="selecione">Selecione...</option>
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="cargofunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Cargo:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control required" id="cargofunc" name="cargofunc"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="resfunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Telefone Residencial:</label>
							<div class="col-xs-10">
								<input type="tel" class="form-control required" id="resfunc" name="resfunc"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="celfunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Celular:</label>
							<div class="col-xs-10">
								<input type="tel" class="form-control required" id="celfunc" name="celfunc"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="senhafunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Senha:</label>
							<div class="col-xs-10">
								<input type="password" class="form-control required" id="senhafunc" name="senhafunc"/>
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