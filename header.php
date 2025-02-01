<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Curso PHP MySQL</title>
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="img/logo.png" title="logo" alt="logo"></a>
            <div id="menu">
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matriculas">Matrículas</a>
                <?php if(isset($_SESSION['login'] )) {?>
                <a href="logout.php"><?php echo $_SESSION ['usuario']; ?> (sair) </a>
                <?php } ?>
            </div>
        </div>
    </header>
    <div id="conteudo" class="container">
        
</body>
</html>