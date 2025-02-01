<h1>Inserir nova matrícula</h1><br>

<form method="post" action="processa_matricula.php">
    <p>Selecione um aluno</p><br>
    <select class="form-select" name="escolha_aluno">
        <option>Selecione um aluno</option>
        <?php 
		while($linha = mysqli_fetch_array($consulta_alunos)){
			echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
		}
		?>
    </select>

    <br><br>

    <p>Selecione um curso</p><br>
    <select class="form-select" name="escolha_curso">
        <option>Selecione um curso</option>
        <?php
        while ($linha = mysqli_fetch_array($consulta_curso)) {
            echo '<option value="' . $linha['id_curso'] . '">' . $linha['nome_curso'] . '</option>';
        }
        ?>
    </select>

    <br><br>

    <input class="btn btn-success" type="submit" value="Matricular Aluno no curso">

</form>