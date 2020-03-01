<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
</head>
<body>
    
    <div class='container' style='width: 400px; margin-top: 40px'>
        <h4>Cadastrar um novo usuário</h4>
        <br>
        <form action='_inserir_usuario_externo.php' method='post'>
            <div class='form-group'>
                <label>Nome de Usuário</label>
                <input type='text' name='usuario' class='form-control' required autocomplete='off' placeholder='Nome Completo'>
            </div>

            <div class='form-group'>
                <label>E-mail</label>
                <input type='email' name='email' class='form-control' required autocomplete='off' placeholder='Digite seu e-mail'>
            </div>

            <div class='form-group'>
                <label>Senha</label>
                <input type='password' id='txtSenha' name='senha' class='form-control' required autocomplete='off' placeholder='Digite uma senha'>
            </div>

            <div class='form-group'>
                <label>Confirmar Senha</label>
                <input type='password' name='senha2' class='form-control' required autocomplete='off' placeholder='Repetir a sua senha' oninput="validarSenha(this)">
            </div>

            <div style='text-align: right'>
                <a href='menu.php' role='button' class='btn btn-sm btn-primary'>Início</a>
                <button type='submit' class='btn btn-sm btn-success'>Cadastrar</button>
            </div>
        </form>
    
    </div>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        function validarSenha(input){
            
            if (input.value != document.getElementById('txtSenha').value){
                input.setCustomValidity('As senhas devem ser iguais');
            }
            else{
                input.setCustomValidity('');
            }
        }
    </script>
</body>
</html>