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
			<li><a href="#acomodacoes">acomodações</a></li>
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