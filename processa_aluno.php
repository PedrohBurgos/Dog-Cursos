<?php 
    include 'db.php';

    $nome_aluno = $_POST['nome'];
    $data_nascimento = $_POST['data'];

    $query = "INSERT INTO alunos(nome_aluno, data_nascimento) values('$nome_aluno', '$data_nascimento')";

    mysqli_query($conexao, $query);

    header('location:index.php?pagina=alunos');
?>