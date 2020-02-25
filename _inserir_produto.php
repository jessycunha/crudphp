<?php

    include 'conexao.php';

    //variáveis recebem os valores dos atributos
    $numero = $_POST['numero'];
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    $sql = "insert into estoque (numero, nome, categoria, quantidade, fornecedor) values ($numero, '$nome', '$categoria', $quantidade, '$fornecedor')";
    $inserir = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href='css/bootstrap.css'>

<div class='container' style='width: 500px; margin-top: 20px'>
    <center>
        <h4>Produto adicionado com sucesso!</h4>
    </center>
    <div style='padding-top: 20px'>
        <center>
            <a href='index.php' role='button' class='btn btn-sm btn-primary'>Cadastrar novo produto</a>
            <a href='listar_produtos.php' role='button' class='btn btn-sm btn-primary'>Mostrar produtos</a>
        </center>
    </div>
</div>

