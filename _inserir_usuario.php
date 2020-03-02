<?php

    include 'conexao.php';
    include 'script/password.php'; //converte a senha em criptografia

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];
    $status = "Ativo";

    $sql = "INSERT INTO usuarios (usuario, email, senha, nivel, status) VALUES ('$usuario', '$email', sha1('$senha'), $nivel, '$status')";
    $inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href='css/bootstrap.css'>

    <div class='container' style='width: 500px; margin-top: 20px'>
        <center>
            <h4>Usuário cadastrado com sucesso!</h4>
        </center>
        <div style='padding-top: 20px'>
            <center>
                <a href='menu.php' role='button' class='btn btn-sm btn-primary'>Início</a>
                <a href='inserir_usuario.php' role='button' class='btn btn-sm btn-primary'>Cadastrar novo usuário</a>
            </center>
        </div>
    </div>

</body>
</html>

