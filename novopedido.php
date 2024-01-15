<!DOCTYPE html>
<html lang="en">
    <?php
        include ('head.php');
    ?>
<body>
    <?php
    $nome = "";
    $btnNone = 0;
        include ('cabecalho.php');
        if(isset($_SESSION['id'])){
            $nome = $_SESSION['nome'];
        }
    ?>
    <div class="" id="Pedidocorpo">
        <form action="salvapedido.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">
                <?php 
                    if(!$nome == ""){
                        echo "Ola Sr. $nome, deixe aqui seu pedido.";
                        $btnNone = 1;
                    }else{
                        echo "Voçê não esta conectado, faça login.";
                    }
                ?>
            </label>
        </div>
        <div class="mb-3">
            <label for="txtpedido" class="form-label">Faça seu pedido</label>
            <input type="text" name="pedido" class="form-control" <?php if($btnNone == 0) echo "disabled";?>>
        </div>
        <button type="submit" class="btn btn-primary" <?php if($btnNone == 0) echo "disabled";?> >Enviar</button>
        </form>
    </div>
</body>
</html>