<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Papai Noel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="novopedido.php">Novo pedido</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">Cadastro de usuário</a>
        </li>
      </ul>
      <ul class="navbar-nav d-flex">
          <li class="nav-item">
<?php
    session_start();
          
    if(isset($_SESSION['id'])) {
?>
          <a class="nav-link" href="#"><?php echo $_SESSION['nome']?></a>
<?php
    } else {
?>
          <a class="nav-link" href="entrar.php">Entrar</a>
<?php
    } 
?>
         </li>
         <li class="nav-item">
<?php        
    if(isset($_SESSION['id'])) {
?>
          <a class="nav-link" href="sair.php">Sair</a>
<?php
    }
?>
         </li>
      </ul>
    </div>
  </div>
</nav>