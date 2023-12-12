<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        header("location: cadastro.php");
        die();
    }

    require_once('banco_dados.php');

    //id não precisa pois é autoincrement
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nasc = $_POST['data_nasc'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];
    $categoria = $_POST['categoria'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Diretório de destino para salvar a foto
        $diretorioDestino = "./adm/img/foto/";
    
        // Nome do arquivo original
        $nomeArquivoOriginal = $_FILES["foto"]["name"];
    
        // Caminho completo para o arquivo de destino
        $caminhoCompleto = $diretorioDestino . $nomeArquivoOriginal;
    
        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $caminhoCompleto)) {
            $foto = $caminhoCompleto;
        } else {
            echo "Erro ao enviar a foto.";
        }
    }
    
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $celular = $_POST['celular'];

    $db = new DBConnect();
    $db->cadastrar_usuario($nome, $cpf, $data_nasc, $sexo, $email, $senha, $tipo, $categoria, $cidade, $estado, $celular, $foto);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/cadastro.css">
    <link rel="icon" href="./img/favicon.png.png">
    <title>Cadastro</title>
</head>

<body style='background-color: #faf9f7;'>

   <nav class='navbar navbar-expand navbar-dark' style='background-color: #2cc0b3;'><!--Define a cor do navbar de acordo com o perfil do usuário-->
        
        <a class="navbar-brand" href="index.html"><img src='./img/logo.png' width='30' height='30'></a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">             
            </ul>                
        </div>
    </nav>

    <p>
    Usuário: <b>
        <?php echo $nome; ?>
    </b>cadastrado com sucesso.
    <br><br>
        <a href="login.php" class="btn btn-primary">Login</a>
    <br><br>
    </p>
</body>
</html>