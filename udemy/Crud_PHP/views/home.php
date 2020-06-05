<h1 style="text-align: center;">
  Bem-Vindos a Dog cursos
<button class="btn btn-secondary float-right" onclick="mostrar_senha()">Mostrar Senha</button> </h1>

  <form action="login.php" method="post">
      <label class="badge badge-secondary">Usuário</label>
      <input type="text" name="usuario" placeholder="Nome do usuário" class="form-control" >
      <br>
      <label class="badge badge-secondary">Senha
      </label>
      <input type="password" name="senha" id="senha" placeholder="Digite a senha" class="form-control">
      <br>
        <input type="submit" value="Entrar" class="btn btn-success"> 
  </form>

<br>


<script>
   function mostrar_senha() {
     var tipo = document.getElementById("senha");
     if(tipo.type == "password"){
        tipo.type = "text";
     }else{
        tipo.type = "password";
     }
   }
</script>


<?php
 if(isset($_GET['erro'])){?>
  <div class="alert alert-danger" role="alert">
    Usuário e/ou senha inválidos. 
  </div>
<?php }?>