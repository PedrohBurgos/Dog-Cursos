
<?php 
    include 'db.php';

    $nome_curso = $_POST['nome_curso'];
    $carga_horaria =$_POST['tempo'];

    $query = "INSERT INTO CURSOS(nome_curso, carga_horaria) values('$nome_curso', $carga_horaria)";

    mysqli_query($conexao, $query);

    header('location:index.php?pagina=cursos');
?>
