<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="main">
<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>
    <table class="table table-hover table-striped" id="alunos" style="border:1px solid #ccc; width: 100%">
        <thead>
        <tr>
            <th>Nome Aluno</th>
            <th>Data de Nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
             while($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<tr><td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['data_nascimento'].'</td>';
            
        ?>
        <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">Editar</a></td>
        <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">Deletar</a></td></tr>
        <?php
			}
		?>
    </tbody>
    </table>

</body>
</html>