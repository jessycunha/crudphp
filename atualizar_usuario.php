<?php

    include 'conexao.php';

    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Usuários</title>

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
        <form action='_atualizar_usuario.php' method='post' style='margin-top: 20px'>
            
            <?php 
                $sql = "SELECT * FROM usuarios WHERE id_usuario = $id";
                $buscar = mysqli_query ($conexao, $sql);

                while ($array = mysqli_fetch_array($buscar)){
                    $id_usuario = $array['id_usuario'];
                    $usuario = $array['usuario'];
                    $email = $array['email'];
                    $nivel = $array['nivel'];
                    $status = $array['status'];
            ?> 

            <div class="form-group">
                <label>Usuário</label>
                <input type="text" class="form-control" name='usuario' value='<?php echo $usuario ?>'>
                <input type="number" class="form-control" name='id_usuario' value='<?php echo $id_usuario ?>' style='display: none'>
            </div>

            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name='email' value='<?php echo $email?>'>
            </div>

            <div class="form-group">
                <label>Nível</label>
                <select class="form-control" name='nivel' value='<?php echo $nivel ?>'>
                    <option value='1'>Administrador</option> <!--Acesso completo-->
                    <option value='2'>Operador</option>   <!--Apenas edição-->
                    <option value='3'>Conferente</option> <!--Apenas visualizar-->
                </select>
            </div>

            <div class="form-group">
                <label>Status</label>
                <input type="text" class="form-control" name='status' value='<?php echo $status ?>'disabled>
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