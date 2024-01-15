<!doctype html>
<html lang="en">
  <?php
    include ('head.php');
  ?>
  <body>
  <?php
    include ('cabecalho.php');
  ?>
  <script>
    function verificarLogin(estadoLogin) {
      if (estadoLogin === 1) {
          console.log("Bem-vindo! Você está logado.");
      } else {
          alert("Voce não conseguiu logar, Tente novamente!");
      }
    }
  </script>
   <div class="container-fluid">
<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
       
    $senhaCripto = hash('sha256', $senha);
       
    $comandoSQL = "SELECT `id`, `nome` FROM `usuarios` WHERE `email` = '$email' AND `senha` = '$senhaCripto'";
    
    include('conexao.php');
       
    $sth = $conexao->prepare($comandoSQL);
    $sth->execute();

    $resultado = $sth->fetch(PDO::FETCH_ASSOC);
       
    if($resultado) {
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['nome'] = $resultado['nome'];
        header("Location: index.php");
    } else {
      ?> <script>verificarLogin(0);</script> <?php
      // header("Location: entrar.php");
    }
?>     
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>