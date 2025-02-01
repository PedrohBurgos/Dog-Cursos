<?php 

include 'db.php';

$usuario = addslashes($_POST['usuario']);

# antes
#print ($_POST['senha']);

$senha = md5($_POST['senha']);

#depois
#print("<br>");

#print $senha;
#exit();

$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){

	session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;

	header('location:index.php');
}
else{
	header('location:index.php?erro');
}