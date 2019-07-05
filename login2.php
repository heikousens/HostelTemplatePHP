<?php
session_start();
include('conexao.php');

$emailfunc = $_POST['emailfunc'];
$senhafunc = $_POST['senhafunc'];

$sql = "select * from cadfuncionario where emailfunc='$emailfunc' and senhafunc='$senhafunc'";

$resultado = mysqli_query($conexao, $sql);
$total     = mysqli_num_rows($resultado);

if ( $total>0 ) {
	$dados = mysqli_fetch_array($resultado);
	$_SESSION['funcionario']       = $dados['idfuncionario'];
	$_SESSION['funcionarionome']  = $dados['nomefunc'];
	$_SESSION['funcionarioemail'] = $dados['emailfunc'];
	echo "<script>
	        location.href='pousadaparnaioca.php';
	      </script>";
} else {
	echo "<script>
	        alert('Cadastro não encontrado');
	      </script>";
}

?>

