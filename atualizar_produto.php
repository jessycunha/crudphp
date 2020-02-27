<?php

    include 'conexao.php';

    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Cadastro</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
    <style type='text/css'>
        #tamanhocontainer{
            width: 500px;
        }
        #botao{
            background-color: #ff1168;
            color: #ffffff;
        }
    </style>

</head>
<body>

    <div class='container' id='tamanhocontainer' style='margin-top: 40px'>
        <h4>Formulário de Atualização</h4>
        <form action='_atualizar_produto.php' method='post' style='margin-top: 20px'>
            
            <?php 
                $sql = "SELECT * FROM estoque WHERE id_estoque = $id";
                $buscar = mysqli_query ($conexao, $sql);

                while ($array = mysqli_fetch_array($buscar)){
                    $id_estoque = $array['id_estoque'];
                    $numero = $array['numero'];
                    $nome = $array['nome'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];
            ?> 

            <div class="form-group">
                <label>Número do produto</label>
                <input type="number" class="form-control" name='numero' value='<?php echo $numero ?>'>
                <input type="number" class="form-control" name='id' value='<?php echo $id ?>' style='display: none'>
            </div>

            <div class="form-group">
                <label>Nome do produto</label>
                <input type="text" class="form-control" name='nome' value='<?php echo $nome ?>'>
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name='categoria' value='<?php echo $categoria ?>'>
                    <?php
                        include 'conexao.php';
                        $sql = "SELECT * FROM categorias ORDER BY categoria ASC";
                        $buscar = mysqli_query($conexao, $sql);

                        while ($array = mysqli_fetch_array($buscar)){
                            $id_categoria = $array['id_categoria'];
                            $categoria = $array['categoria'];
                    ?>
                        <option><?php echo $categoria; ?></option>
                        <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name='quantidade' value='<?php echo $quantidade ?>' disabled>
            </div>

            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name='fornecedor' value='<?pgp echo $fornecedor ?>'>
                    <?php 
                        include 'conexao.php';
                        $sql = "SELECT * FROM fornecedores ORDER BY fornecedor ASC";
                        $buscar = mysqli_query($conexao, $sql);

                        while ($array = mysqli_fetch_array($buscar)){
                            $id_fornecedor = $array['id_fornecedor'];
                            $fornecedor = $array['fornecedor'];

                    ?>
                        <option><?php echo $fornecedor; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div style='text-align: right'>
            <button type='submit' id='botao' class='btn btn-sm'>Atualizar</button>
            </div>
            
            <?php } ?>

        </form>
    </div>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>