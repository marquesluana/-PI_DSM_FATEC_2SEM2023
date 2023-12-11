<?php

require_once('banco_dados.php');

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

    <script>
    function verificarSenhas() {
      // Obter os valores dos campos de senha
      var senha = document.getElementById('senha').value;
      var senha2 = document.getElementById('senha2').value;

      // Verificar se as senhas são iguais
      if (senha !== senha2) {
        alert('As senhas não coincidem. Por favor, digite novamente.');
        return false; // Impede o envio do formulário
      }

      // Se as senhas são iguais, permite o envio do formulário
      return true;
    }
    </script>
</head>

<body style='background-color: #faf9f7;'>

   <nav class='navbar navbar-expand navbar-dark' style='background-color: #2cc0b3;'><!--Define a cor do navbar de acordo com o perfil do usuário-->
        
        <a class="navbar-brand" href="index.html"><img src='./img/logo.png' width='30' height='30'></a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">             
            </ul>                
        </div>
    </nav>

    <div class="jumbotron" style='background-color: #faf9f7;'>
        <div class="container-fluid">
            <h2 class="text-center" style="margin-bottom: 50px;">Cadastro</h2>                
            <form class="form-contato" method="POST" action="cadastro_usuario.php" enctype="multipart/form-data" onsubmit="return verificarSenhas();">

                <div class="form-row">
                    
                    <div class="form-group col-md-4">
                        <label for="foto">Escolha uma foto:</label>
                        <input type="file" id="foto" name="foto" accept="image/*">
                    </div>

                    <div class="form-group col-md-4">                           
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Completo" value="" required>
                    </div>

                    <div class="form-group col-md-4">
                        <input type="cpf" id="cpf" name="cpf" class="form-control" placeholder="CPF" type="text" required>                            
                    </div>

                    <div class="form-group col-md-4">                            
                        <input type="email" id="email" name="email" class="form-control" placeholder="Seu e-mail" value="" required>
                    </div>

                    <div class="form-group col-md-4">
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" type="text" required>                            
                    </div>

                    <div class="form-group col-md-4">
                        <input type="password" id="senha2" name="senha2" class="form-control" placeholder="Repita a senha" type="text" required>
                    </div>

                    <div class="form-group col-md-4">
                        <select class="form-control" name="estado">
                            <option selected disabled>Selecione um estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>  
                    </div>

                    <div class="form-group col-md-4">
                        <input type="city" id="city" name="cidade" class="form-control" placeholder="Cidade" type="text" required>                            
                    </div>

                    <div class="form-group col-md-4">
                        <input type="date" name="data_nasc" class="form-control" placeholder="Data de Nascimento" type="text" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="sexo">Escolha o seu sexo:</label>
                        <select id="sexo" name="sexo">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <input type="tel" id="celular" name="celular" class="form-control" placeholder="Celular" type="tel" required>
                    </div>

                    <div class="form-group col-md-3">
                        <select class="form-control" name="tipo">
                            <option value="Prestador">Prestador de Serviço</option>
                            <option value="Paciente">Paciente</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <select class="form-control" name="categoria">
                            <option value="Idoso">Idoso</option>
                            <option value="PCD">PCD</option>
                            <option value="Ambos">Ambas as opções</option>
                        </select>
                    </div>
                
                    <div class="form-button">
                        <button type="submit">Criar conta</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>