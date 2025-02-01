<?php

# Iniciar sessão
session_start();

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'cursos';
	}
}
else{
	$pagina = 'home';
}

switch($pagina){
	case 'cursos': include 'cursos.php'; break;
	case 'alunos': include 'alunos.php'; break;
	case 'matriculas': include 'matriculas.php'; break;
	case 'inserir_aluno': include 'inserir_aluno.php'; break;
	case 'inserir_matricula': include 'inserir_matricula.php'; break;
	case 'inserir_curso': include 'inserir_curso.php'; break;
	default: include 'home.php'; break;
}

# Rodapé
include 'footer.php';