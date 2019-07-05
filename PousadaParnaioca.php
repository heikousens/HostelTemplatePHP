<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <title>Pousada Parnaioca</title>
    <meta charset="utf-8"/>
	<link rel="shortcut icon" type="image/png" href="imagens/FlowerMandala_Single_Front_1f9fa7fe-d02d-463d-9343-070b3dc6bdde.png"/>
    
	<link rel="shortcut icon" type="image/png" href="Imagens/a23baf44a21838b31e2c115d4679b796.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all" />
    <link href="css/Estilos.css" rel="stylesheet" media="all" />
	
	<!-- Bootstrap parte do princípio de que todo display é divido em 12 colunas, ou seja, a tela é divida em, no máximo, 12 colunas - porém, ele define 4 medidas: para o smartphone(XS); para o tablet(SM); para o desktop(MD); e para os monitores widescreen(LG). Sempre que tivermos a representação para tela de smartphone, usaremos a definição XS, e assim por diante. Essas medidas são precedidas pelo prefixo col, que define a quantidade de colunas - ex.: para smartphone, fica: COL-XS-12, indicando que esse objeto utilizará toda a largura da tela. Se quiser criar uma coluna menor à esquerda para a barra de navegação, por exemplo, havendo barra de navegação e barra de conteúdo, haverá COL-MD-5 para a navegação, por exemplo, e para completar a barra de conteúdo, COL-MD-7. Se extrapolar, o resto do conteúdo ficará quebrado na parte de baixo. -->

</head>
    
<body>

<nav class="nn" id="navbar" style="opacity:1;">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar" style="background-color: #FFFFFF;"></span>
				<span class="icon-bar" style="background-color: #FFFFFF;"></span>
				<span class="icon-bar" style="background-color: #FFFFFF;"></span> 
		</button>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav" id="dropdown">
		<?php
        if(!isset($_SESSION['funcionarionome'])){
        ?>
			<li><a href="#home">home</a>
			<li><a href="#quemsomos">quem somos</a></li>
			<li><a href="#acomodacoes">suítes especiais</a></li>
			<li><a href="#estrutura">estrutura</a></li>
			<li><a href="#contato">contato</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right" id="dropdown">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
		<?php
        } else{
echo "
			<li><a href='pousadaparnaioca.php'>home</a>
			<li><a href='acomodacoes.php'>acomodações</a></li>
			<li><a href='cadcliente.php'>cadastrar cliente</a></li>
			<li><a href='reserva.php'>reservar quarto</a></li>
			<li><a href='relatorios.php'>relatórios</a></li>
		</ul>
		<ul class='nav navbar-nav navbar-right' id='dropdown'>
        <li><a href='cadfuncionario.php'><span class='glyphicon glyphicon-user'></span> Cadastro</a></li>

          <li>
              <div style='font-family: sans-serif; font-weight: bold; font-size: 10px; line-height: 50px;'>Olá, " . $_SESSION['funcionarionome']  ."</div>
          </li>
          <li>
              <a href=logoff.php>Sair</a>
          </li>";

        }
		?>
      </ul>
	</div>
</nav>

<header class="top">
	<section class="top_content">
		<div class="title">Pousada Parnaioca</div>
		<p style="font-weigth: bold; font-size: 10px;">Um pedaço do Paraíso ao seu alcance</p>	
	</section>
</header>

<br/>
<br/>
<br/>

<div class="container">
<div class="row">
<div class="col-xs-12" id="quemsomos">
	<h1>A Parnaioca</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/>
	</div>
	<br/>
	<div class="col-xs-12" align="center">
	<p class="subtext">Localizada em Abraão, no coração de Ilha Grande, a <strong>Pousada Parnaioca</strong> oferece conforto e serviço de qualidade, tudo com muito respeito à natureza, para que você possa aproveitar ao máximo tudo o que Ilha Grande tem de melhor. Com 3.000m² de área útil, a <strong>Pousada Parnaioca</strong> oferece 10 apartamentos standard e 3 suítes de alto nível, além de contar com extensa área de lazer, piscina, sauna, spa, bar e restaurante, tudo isso com uma vista panorâmica para a praia de Parnaioca.</p>
	</div>
</div>
</div>
</div>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>

<div class="container">
<div class="row">
<div class="col-xs-12" id="acomodacoes">
	<h1>Suítes Especiais</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<br/>
		<figure class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<div class="hvrbox"><a href="#"><img class="img-responsive hvrbox-layer_bottom" src="imagens/1778799_113_w.jpg" alt="Foto da empresa"/><div class="hover hvrbox-layer_top hvrbox-layer_slidedown"><div class="hvrbox-text"><p><h1 style="font-family: Garamond;">Suíte Lopes Mendes</h1></p><br/><p style="font: 1.1em Garamond;">Saiba mais</p></div></div></div></a>
		</figure>
		<figure class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<div class="hvrbox"><a href="#"><img class="img-responsive hvrbox-layer_bottom" src="Imagens/Garden-Apartment-bedroom.jpg" alt="Foto da empresa"/><div class="hover hvrbox-layer_top hvrbox-layer_slidedown"><div class="hvrbox-text"><p><h1 style="font-family: Garamond;">Suíte Parnaioca</h1></p><br/><p style="font: 1.1em Garamond;">Saiba mais</p></div></div></div></a>
		</figure>
		<figure class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<div class="hvrbox"><a href="#"><img class="img-responsive hvrbox-layer_bottom" src="Imagens/accommodations_Spa-Penthouse.jpg" alt="Foto da empresa"/><div class="hover hvrbox-layer_top hvrbox-layer_slidedown"><div class="hvrbox-text"><p><h1 style="font-family: Garamond;">Suíte Lagoa Azul</h1></p><br/><p style="font: 1.1em Garamond;">Saiba mais</p></div></div></div></a>
			<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
		</figure>
	</div>
</div>
</div>
</div>


<div class="container">
<div class="row">
<div class="col-xs-12" id="estrutura">
	<h1>Estrutura</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<br/>
		<div class="col-xs-12" align="center">
		<p class="subtext">A <strong>Pousada Parnaioca</strong> conta com uma infraestrutura focada em proporcionar conforto e sofisticação, sem perder o contato com a natureza. Confira abaixo o que oferecemos:</p>
		<br/>
		<br/>
		</div>
		<br/>
		<br/>
		<div class="col-xs-12" align="center">
		<figure class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-bottom:20px;">
			<div class="hvrbox"><a href="#"><img class="img-responsive hvrbox-layer_bottom" src="imagens/1_-xHF1a7BT8hN8KsHbQCDSw.jpeg" alt="Foto da empresa"/><div class="hover hvrbox-layer_top hvrbox-layer_slidedown"><div class="hvrbox-text"><p><h1 style="font-family: Garamond;">Gourmet</h1></p></div></div></div></a>
		</figure>
		<figure class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-bottom:20px;">
			<div class="hvrbox"><a href="#"><img class="img-responsive hvrbox-layer_bottom" src="Imagens/fancydrinks.jpg" alt="Foto da empresa"/><div class="hover hvrbox-layer_top hvrbox-layer_slidedown"><div class="hvrbox-text"><p><h1 style="font-family: Garamond;">Bar</h1></p></div></div></div></a>
		</figure>
		<figure class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-bottom:20px;">
			<div class="hvrbox"><a href="#"><img class="img-responsive hvrbox-layer_bottom" src="Imagens/Hot-Stone-Massage.jpg" alt="Foto da empresa"/><div class="hover hvrbox-layer_top hvrbox-layer_slidedown"><div class="hvrbox-text"><p><h1 style="font-family: Garamond;">SPA</h1></p></div></div></div></a>
		</figure>
		<figure class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-bottom:20px;">
			<div class="hvrbox"><a href="#"><img class="img-responsive hvrbox-layer_bottom" src="Imagens/Atmosphere-Pool-Detail.jpg" alt="Foto da empresa"/><div class="hover hvrbox-layer_top hvrbox-layer_slidedown"><div class="hvrbox-text"><p><h1 style="font-family: Garamond;">Piscina Infinita</h1></p></div></div></div></a>
		</figure>
		<figure class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-bottom:20px;">
			<div class="hvrbox"><a href="#"><img class="img-responsive hvrbox-layer_bottom" src="Imagens/Atmosphere-Boutique.jpg" alt="Foto da empresa"/><div class="hover hvrbox-layer_top hvrbox-layer_slidedown"><div class="hvrbox-text"><p><h1 style="font-family: Garamond;">Loja</h1></p></div></div></div></a>
		</figure>
		<figure class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="margin-bottom:20px;">
			<div class="hvrbox"><a href="#"><img class="img-responsive hvrbox-layer_bottom" src="imagens/7.jpg" alt="Foto da empresa"/><div class="hover hvrbox-layer_top hvrbox-layer_slidedown"><div class="hvrbox-text"><p><h1 style="font-family: Garamond;">Sauna</h1></p></div></div></div></a>
			<br/>
		<br/>
		<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	</figure>
	</div>
		</div>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-xs-12" id="contato">
	<h1>Contato</h1><br>
	<div align="center">
		<img src="Imagens/Sage-Yoga-Symbol_Blue.png"/><br>
		<br/>
		<p class="subtext">Dúvidas, sugestões, elogios e reclamações? A <strong>Pousada Parnaioca</strong> tem o maior prazer em ouvir a sua opinião! Saiba mais sobre nossos pacotes, faça uma requisição de reserva* ou simplesmente mande sua mensagem aqui.</p><br/>
		<br>
		<p class="subtext" style="font-size:16px;">*Lembramos que a requisição de reserva fica sujeita à confirmação da disponibilidade de acomodações nas datas desejadas. A confirmação de reserva deverá ser feita por telefone ou pessoalmente.</p>
		<br/>
		<div class="col-xs-12">
					<form class="form-horizontal" action="contato.php" method="post">
						<div class="form-group">
							<label for="nome" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Nome Completo:</label>
							<div class="col-xs-10">
								<input type="text" class="form-control" id="nome" name="nome"/>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="email" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Email:</label>
							<div class="col-xs-10">
								<input type="text" class="form-control" id="email" name="email"/>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="assunto" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Assunto:</label>
							<div class="col-xs-10">
								<select class="form-control" id="assunto" name="assunto">
									<option></option>
									<option style="font: 1.2em Garamond;" value="elogio">Elogio</option>
									<option style="font: 1.2em Garamond;" value="reclamacao">Reclamação</option>
									<option style="font: 1.2em Garamond;" value="duvida">Dúvida</option>
									<option style="font: 1.2em Garamond;" value="sugestao">Sugestão</option>
									<option style="font: 1.2em Garamond;" value="depoimento">Depoimento</option>
									<option style="font: 1.2em Garamond;" value="requisicao">Requisição de Reserva</option>
								</select>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="mensagem" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Mensagem:</label>
							<div class="col-xs-10">
								<textarea class="form-control" name="mensagem" rows="8" style="resize:none;"></textarea><br>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<div class="col-xs-offset-3 col-xs-2">
								<button type="submit" class="btn" style="background-color: #00868B; color: #FFFFFF;">Enviar Mensagem</button>
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

<footer>
	<div class="col-xs-4">
	<br/>
	<br/>
	<br/>
	<br/>
	<p style="font-family: Pristina, sans-serif; font-size: 60px; text-align: center;">Pousada Parnaioca</p>
	<br/>
	<p class="bottom"><b>E-mail:</b> atendimento@parnaioca.com.br</p>
	<p class="bottom"><b>Telefone:</b> +55 (21) 3029-4795</p>
	</div>
	<div class="col-xs-4">
	<br/>
	<br/>
	<br/>
	<h2 style="font-family: Garamond; text-align: center;">Encontre-nos nas redes sociais!</h2>
	<div class="caption" align="center">
	<br/>
		<a href="#" title="twitter"><i class="fa fa-twitter" style="font-size:30px; color: #FFFFFF;" aria-hidden="true"></i></a>
		<a href="#" title="instagram"><i class="fa fa-instagram" style="font-size:30px; color: #FFFFFF;" aria-hidden="true"></i></a>
		<a href="#" title="facebook"><i class="fa fa-facebook" style="font-size:30px; color: #FFFFFF;" aria-hidden="true"></i></a>
		<a href="#" title="snapchat"><i class="fa fa-tripadvisor" style="font-size:30px; color: #FFFFFF;" aria-hidden="true"></i></a>
	</div>
	</div>
	<div class="col-xs-4">
	<br/>
	<br/>
	<br/>
	<h2 style="font-family: Garamond; text-align: center;">Newsletter</h2>
	</br>
		<form class="form-horizontal" action="newsletter.php" method="POST">
		<div class="form-group col-xs-8">
			<input type="email" class="form-control" name="emailnews" id="emailnews" placeholder="Insira seu e-mail"/>
		</div>
		<div class="col-xs-4">
			<input class="button" type="submit" value="Assinar">
		</div>
		</form>
	</div>
</footer>




	<!--  JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<!-- inserindo Java do Bootstrap -->
	<!-- Última versão Java compilada e minificada -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	
</body>
</html>