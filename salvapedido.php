<!doctype html>
<html lang="pt-br">
  <?php
    include ('head.php');
  ?>
  <body>
    <?php
      include ('cabecalho.php');
    ?>
   <div class="container-fluid">
<?php
    $pedido = $_GET['pedido'];
    $id = $_SESSION['id'];
       
    $comandoSQL = "INSERT INTO `pedidos` (`id`, `id_usuario`, `pedido`) VALUES (NULL, '$id', '$pedido');";
    
    include('conexao.php');
    $resultado = $conexao->query($comandoSQL);
       
    if($resultado) {
        echo "Pedido enviado com sucesso!!!!";
    } else {
        echo "Erro!!!";
    }
?>     
   </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>