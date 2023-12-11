<?php
require_once('banco_dados.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $db = new DBConnect();
    $stmt = $db->select_login($email, $senha);
    if ($stmt == NULL){
        echo "E-mail não cadastrado.";
        $_SESSION['online'] = FALSE;
    } else if ($_POST['senha'] == $stmt){
        $_SESSION['online'] = TRUE;
        $_SESSION['username'] = $db->select_username($email);
        header("location: ./adm/index.php");
    } else if ($stmt == "SQL Error"){
        echo "Error SQL";
        $_SESSION['online'] = FALSE;
    } else {
        echo "Senha incorreta.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/signin.css">
    <link rel="icon" href="./img/favicon.png.png">
    <title>Área de acesso</title>
</head>

<body class="text-center">
<form class="form-signin" method="POST" action="login.php">
        <a href="index.html"><img class="mb-4" src="./img/logofinal1.png" alt="HCC"></a>
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        
        <div class="form-group">
            <label>Usuário</label>
            <input name="email" type="text" class="form-control" placeholder="Digite o e-mail">               
        </div>
        
        <div class="form-group">
            <label>Senha</label>
            <input name="senha" type="password" class="form-control" placeholder="Digite a senha">
        </div>
                <button type="submit" class="btn btn-lg">Entrar</button>
                <p></p>            
                <button type="submit" class="btn btn-lg btn-block"><a href="./cadastro.php">Cadastrar-se</a></button>           
        
</form>

   
</body>
</html>