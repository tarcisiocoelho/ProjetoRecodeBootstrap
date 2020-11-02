<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "projeto_banco_dados";

    //criando conexão
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    //verificando a conexão

    if(!$conn){
        die("Não foi possível conectar" .mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="..//css/estilos.css">
    <link rel="stylesheet" type="text/css" href="..//css/index.css">
    <link rel="stylesheet" type="text/css" href="..//css/produtos.css">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Produtos Pink Store</title>
</head>
            <!--categorias-->
<body>
            <!--menu-->
        <?php
            include '../include/index.html'
        ?>

        <div id="coluna1">
            <ul id="lista">
                <li class="lead" onclick="todos()">Todos</li>
                <li class="lead" onclick="exibircategoria('Notebook')">Notebook</li>
                <li class="lead" onclick="exibircategoria('Celular')">Celular</li>
                <li class="lead" onclick="exibircategoria('Impressora')">Impressora</li>
            </ul>
            <hr id="posicaocoluna">
        </div>

            <!--início dos produtos-->

        <?php
            $sql = "select * from produtos";
            $result = $conn->query($sql);
        
            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){          
        ?>

    <form action="#" method="post" name="enviarpedido">
    <div class="colunaprodutos" id="<?php echo $rows["nome"]; ?>" style='display: block;'>
        <div class="imgproduto">
            <img src="<?php echo $rows["nome_img"]; ?>" width="200px" onclick="destaque(this)">
        </div>
        <div class="texto-produto">
            <h3><?php echo $rows["descricao"]; ?></h3>
            <hr>
            <h4 class="strike">R$<?php echo $rows["preco"]; ?></h4>
            <p class="preco">R$<?php echo $rows["preco_venda"]; ?></p><br> 
        </form>
            </div>
        </div>
    </div>

        <?php
                }
            } else {
                echo "Nenhum produto cadastrado";
            }
        ?>
    
        <div class="rodape"><br>
        <span>
            <h4 class="texto-pagamento">Formas de Pagamento <br> &copy;PinkStore</h4>
            <img class="imgpagamento" src="..//Imagens/imgcartao.png" width="15%" alt="Formas de pagamento.">
        </span>
        </div>
    </div>

    <script src="..//javascript/projeto.js"></script>
</body>
</html> 