<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagado com sucesso</title>
</head>
<body>
    <?php

        include 'conexao.php';

        $id = $_GET ['id'];
        
        $sql = "DELETE FROM estoque WHERE id_estoque = $id";   
        $deletar = mysqli_query($conexao, $sql);

    ?>
    <link rel="stylesheet" href='css/bootstrap.css'>

    <div class='container' style='width: 500px; margin-top: 20px'>
        <center>
            <h4>Apagado com sucesso!</h4>
        </center>
        <div style='padding-top: 20px'>
            <center>
                <a href='menu.php' role='button' class='btn btn-sm btn-primary'>Início</a>
                <a href='listar_produtos.php' role='button' class='btn btn-sm btn-primary'>Ver produtos</a>
            </center>
        </div>
    </div>
    
</body>
</html>

