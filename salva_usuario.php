<!doctype html>
<html lang="en">
  <?php
    include ('head.php');
  ?>
  <body>
    <?php
      include ('cabecalho.php');
    ?>
   <div class="container-fluid">
<?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
       
    $senhaCripto = hash('sha256', $senha);
       
    $comandoSQL = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '$nome', '$email', '$senhaCripto')";
    
    include('conexao.php');
    $resultado = $conexao->query($comandoSQL);
       
    if($resultado) {
        echo "Usuário cadastrado!";
        header("Location: index.php");
    } else {
        echo "Erro no cadastro!";
    }
?>     
   </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>