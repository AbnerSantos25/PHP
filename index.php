<!doctype html>
<html lang="en">
  <?php
    include ('head.php');
  ?>
  <body>
  <?php
    include ('cabecalho.php');
  ?>
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://static.vecteezy.com/ti/vetor-gratis/p2/2027488-vector-illustration-of-sign-in-page-login-website-page-and-form-people-with-smartphone-screen-vetor.jpg"
          class="img-fluid" alt="Sample image">
      </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 teste" id="Dpedidos">
          <div class="h1pedido" style="text-align: center;padding-bottom: 5px;"><H1>PEDIDOS</H1></div>
          <?php 
            //aqui vai ser o campo que busca os pedidos
            if (isset($_SESSION['id'])) {
              include('conexao.php');
              
              $idUsuario = $_SESSION['id'];

              $comandoSQL = "SELECT `id`, `pedido` FROM `pedidos` WHERE `id_usuario` = :idUsuario";
              $res = $conexao->prepare($comandoSQL);
              $res->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT); // PDO::PARAM_INT para indicar um inteiro
              $res->execute();
              $result = $res->fetchAll(PDO::FETCH_ASSOC);
              // var_dump($result);

              echo '<div class="corpo" id="Dpedidos">';
              if (count($result) > 0) {
                $t = 0;
                foreach ($result as $row) {
                  $t++;
                  echo '
                    <div>
                      <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button btnPedidos" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne'.$t.'" aria-expanded="true" aria-controls="collapseOne">
                              Pedido N:'. $row['id'] . '
                            </button>
                          </h2>
                          <div id="collapseOne'.$t.'" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              '. $row['pedido'].'
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>';
              }
              } else {
                  echo "Nenhum pedido encontrado para este usuário.";
              }   
            }
            else{
              
            }
          ?>
        </div>
    </div>
  </div>
  
    <!-- Right -->
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    </div>
</section>


  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>