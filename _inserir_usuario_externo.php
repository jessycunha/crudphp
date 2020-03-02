<?php

    include 'conexao.php';
    include 'script/password.php'; //converte a senha em criptografia

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $status = "Inativo";

    $sql = "INSERT INTO usuarios (usuario, email, senha, status) VALUES ('$usuario', '$email', sha1('$senha'), '$status')";
    $inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href='css/bootstrap.css'>

    <div class='container' style='width: 500px; margin-top: 20px'>
        <center>
            <h4>Usuário cadastrado com sucesso!<br>Esperando aprovação.</h4>
        </center>
        <div style='padding-top: 20px'>
            <center>
                <a href='index.php' role='button' class='btn btn-sm btn-primary'>Voltar</a>
                
            </center>
        </div>
    </div>

</body>
</html>

