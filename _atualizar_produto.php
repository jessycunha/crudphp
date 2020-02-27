<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizado com sucesso</title>
</head>
<body>

    <?php

        include 'conexao.php';

        $id = $_POST ['id'];
        $numero = $_POST ['numero'];
        $nome = $_POST ['nome'];
        $categoria = $_POST ['categoria'];
        $fornecedor = $_POST ['fornecedor'];
        
        $sql = "UPDATE estoque SET numero = $numero, nome = '$nome', categoria = '$categoria', fornecedor = '$fornecedor' WHERE id_estoque = $id";
        
        $atualizar = mysqli_query($conexao, $sql);

    ?>
    <link rel="stylesheet" href='css/bootstrap.css'>

    <div class='container' style='width: 500px; margin-top: 20px'>
        <center>
            <h4>Atualizado com sucesso!</h4>
        </center>
        <div style='padding-top: 20px'>
            <center>
                <a href='menu.php' role='button' class='btn btn-sm btn-primary'>Início</a>
                <a href='inserir_produto.php' role='button' class='btn btn-sm btn-primary'>Cadastrar um produto</a>
                <a href='listar_produtos.php' role='button' class='btn btn-sm btn-primary'>Mostrar produtos</a>
            </center>
        </div>
    </div>
</body>
</html>
