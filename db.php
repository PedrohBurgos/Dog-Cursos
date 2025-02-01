
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'usbw';
    $banco = 'aula_php';

    $conexao = @mysqli_connect($host, $user, $pass, $banco) 
        or die("Problemas com a conexão do Banco de Dados");

        $query = 'SELECT * FROM cursos';
        $consulta_curso = mysqli_query($conexao, $query);

        $query = 'SELECT * FROM alunos';
        $consulta_alunos = mysqli_query($conexao, $query);

        $query = 'SELECT alunos_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso
                  FROM alunos, cursos, alunos_cursos
                  WHERE alunos_cursos.id_aluno = alunos.id_aluno
                  AND alunos_cursos.id_curso = cursos.id_curso';
        $consulta_matriculas = mysqli_query($conexao, $query);

?>