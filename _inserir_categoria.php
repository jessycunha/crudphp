<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionada com sucesso</title>
</head>
<body>

    <?php
        include 'conexao.php';
        $categoria = $_POST['categoria'];

        $sql = "INSERT INTO categorias (categoria) VALUES ('$categoria')";
        $inserir = mysqli_query($conexao, $sql);
    ?>

    <link rel="stylesheet" href='css/bootstrap.css'>

    <div class='container' style='width: 500px; margin-top: 20px'>
        <center>
            <h4>Categoria adicionada com sucesso!</h4>
        </center>
        <div style='padding-top: 20px'>
            <center>
                <a href='menu.php' role='button' class='btn btn-sm btn-primary'>Início</a>
                <a href='inserir_categoria.php' role='button' class='btn btn-sm btn-primary'>Cadastrar nova categoria</a>
            </center>
        </div>
    </div>

</body>
</html>

