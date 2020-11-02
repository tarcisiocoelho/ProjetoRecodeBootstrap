<?php
    include_once '../include/connect.php';
?>

<?php

    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])){
        $nome       = $_POST['nome'];
        $email      = $_POST['email'];
        $mensagem   = $_POST['mensagem'];

        $sql = "insert into comentarios (nome, email, mensagem) values ('$nome', '$email', '$mensagem')";

        mysqli_query($connect, $sql);
    }
?>

<!DOCTYPE html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="..//css/estilos.css">
    <link rel="stylesheet" type="text/css" href="..//css/index.css">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Contatos</title>
</head>

    <body>
        <!--menu-->
        <?php
            include '../include/index.html'
        ?>
        
        <h2 class="display-4 text-center mt-4">Vem pras redes, vem!</h2>
        <div class="d-flex mt-2 text-center my-5 redesocial">
            <a href="#">
                <img src="../Imagens/redesocial/twitter.png" alt="" class="tam-imagem">
            </a>
            <a href="#">
                <img src="../Imagens/redesocial/facebook.png" alt="" class="tam-imagem">
            </a>
            <a href="#">
                <img src="../Imagens/redesocial/instagram.png" alt="" class="tam-imagem">
            </a>
            <a href="#">
                <img src="../Imagens/redesocial/email.png" alt="" class="tam-imagem">
            </a>
        </div><br>
        
        <div class="container">
            <p class="lead text-center">Ouuu, nos mande uma mensagem!</p>
        <form class="text-center form-group" action="" method="post">
            <input class="form-control-lg border text-center" type="text" name="nome" id="nome" placeholder="Digite seu nome"><br><br>
            <input class="form-control-lg border text-center" type="email" name="email" id="email" placeholder="Digite seu email"><br><br>
            <textarea class="border" name="mensagem" id="mensagem" cols="50" rows="10" placeholder="Digite aqui sua mensagem"></textarea><div>
            <input class="btn btn-primary" name="enviar" type="submit" value="ENVIAR">
        </form>
        </div>

    <div class="container-fluid-sm footer">
        <div class="container text-center">
            <p class="lead text-dark">Formas de Pagamento</p>
            <hr>
            <img src="../Imagens/imgcartao.png" alt="">
        </div>
    </div>
    
    </body>
</html>