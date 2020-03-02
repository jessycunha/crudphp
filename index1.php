<?php

    include 'conexao.php';
    include 'script/password.php';

    $email = $_POST['email'];
    $senha = $_POST['senhausuario'];

    $sql = "SELECT email, senha FROM usuarios WHERE email = '$email' AND status='Ativo'";
    $buscar = mysqli_query($conexao, $sql);

    $resultado = mysqli_num_rows($buscar);

    while ($array = mysqli_fetch_array($buscar)){
        
        $senhacadastrada = $array['senha'];
        $senhadigitada = sha1($senha);
        
        if ($resultado > 0){
            if ($senhadigitada == $senhacadastrada){
                session_start();
                $_SESSION['email'] = $email;
                header('location: menu.php');
            }
            else {
                ?>
                <link rel="stylesheet" href='css/bootstrap.css'>

                <div class='container' style='width: 500px; margin-top: 20px'>
                    <center>
                        <h4>Senha Incorreta!</h4>
                    </center>
                    <div style='padding-top: 20px'>
                        <center>
                            <a href='index.php' role='button' class='btn btn-sm btn-primary'>Voltar</a>
                        </center>
                    </div>
                </div>
                <?php
            }

        }
        else {
            header('location: erro.php'); //NÃO ESTÁ FUNCIONANDO ESSE ELSE
        }
    }


?>
