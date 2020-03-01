<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovar Usuário</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class='container' style='margin-top: 40px'>
        <div class='container' style='text-align: right'>
            <a href='menu.php' role='button' class='btn btn-sm btn-success'>Voltar</a>
        </div>
        <h3>Lista de Usuários Inativos</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nível</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php

                include 'conexao.php';
                $sql = "SELECT * FROM usuarios WHERE status = 'Inativo' ORDER BY usuario ASC";
                $buscar = mysqli_query($conexao, $sql);

                $i = 0;
                while ($array = mysqli_fetch_array($buscar)){
                    $id_usuario = $array['id_usuario'];
                    $usuario = $array['usuario'];
                    $email = $array['email'];
                    $nivel = $array['nivel'];
            ?>

            <tr>
                <td><?php echo $usuario ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $nivel ?></td>
                <td>
                    <a class="btn btn-success btn-sm" style=" color: #fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1" role="button">Administrador</a>
                    <a class="btn btn-warning btn-sm" style=" color: #fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button">Operador</a>
                    <a class="btn btn-dark btn-sm" style=" color: #fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3" role="button">Conferente</a>
                    <a class="btn btn-danger btn-sm" style=" color: #fff" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>" role="button">Deletar</a>
                </td>
            </tr>
            

            <?php
                $i++;
                }
            ?>

        </table>
        <p>Total de usuários inativos: <?php echo $i; ?></p>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>