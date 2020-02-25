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
            <a href='index.php' role='button' class='btn btn-sm btn-primary'>Cadastrar novo produto</a>
            <a href='editar_produto.php' role='button' class='btn btn-sm btn-primary'>Editar outro produto</a>
            <a href='listar_produtos.php' role='button' class='btn btn-sm btn-primary'>Mostrar produtos</a>
        </center>
    </div>
</div>

