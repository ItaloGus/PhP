<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>DogCursos</title>
<body>
  <header>
      <div class="container">
        <a href="?pagina=home"><img src="img/logo.png"  title="Logo" alt="Logo"></a>
        <div id="menu">
  
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://kit.fontawesome.com/eb78a3c0f3.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/estilo.css">

</head>

         <a href="?pagina=cursos">Cursos</a>
          <a href="?pagina=alunos">Alunos</a>
          <a href="?pagina=matriculas">Matriculas</a>

          <?php if(isset($_SESSION['login'])){ ?>
            <a href="logout.php">
              <?php echo $_SESSION['usuario']; ?> (sair)
            </a>
          <?php }?>
          

        </div>
      </div>
  </header>

  <div id="conteudo" class="container">