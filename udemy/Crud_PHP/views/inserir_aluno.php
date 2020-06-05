<?php if(!isset($_GET['editar'])){ ?>

  <h1>Inserir novo aluno</h1>
  <form  method="post" action="processa_aluno.php">
  <label>Nome Curso</label><br>
    <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
    <br><br>
    <label>Data de Nascimento</label><br>
    <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento">
    <br><br>
    <input class = "btn btn-success" type="submit" value="Inserir Aluno">
  </form>

  <?php } else{ ?>
  <?php while($linha = mysqli_fetch_array($consulta_aluno)){?>
    <?php if($linha['id_aluno'] == $_GET['editar']){?>
      <h1>Editar aluno</h1>
      <form  method="post" action="edita_aluno.php">
        <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno'];?>">
        <label>Nome Curso</label><br>
        <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno'];?>">
        <br><br>
        <label>Carga Horária</label><br>
        <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento'];?>">
        <br><br>
        <input class = "btn btn-success" type="submit" value="Editar Aluno">
      </form>
    <?php } ?>
  <?php } ?>
<?php } ?>