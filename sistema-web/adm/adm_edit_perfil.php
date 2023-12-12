<?php
    require_once('adm_header.php');
    require_once('..\banco_dados.php');
    require_once('..\session.php');
    include 'dados_usuario.php';

    /*if($_SERVER["REQUEST_METHOD"] == "GET"){
        header("location: adm_edit_perfil.php");
        die();
    }*/

?>

<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <!--Padrões de linguagem e responsividade da página-->    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    <meta    http-equiv="Content-Type"            content="text/html; charset=windows-1252">
    <meta    http-equiv="Content-Language"        content="Portuguese">
    <meta    charset="iso-8859-1">
    <meta    name="viewport"                      content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    
    <!--JS que carrega os ícones do menu-->
    <script   defer src="js/fontawesome-all.min.js"></script>    
    <!--CSS das páginas-->
    <link    rel="icon"                           href="img/logo.png"><!--Ícone da aba do navegador-->
    <link    rel="stylesheet"                     href="css/bootstrap.css"><!--Bootstrap 4-->
    <link    rel="stylesheet"                     href="css/fontawesome.min.css"><!--Ícines relacionados aos botões e ao menu-->    
    <link    rel="stylesheet"                     href="css/dashboard.css"><!--Define a cor do menu de acordo com o perfil do usuário-->
      

    <title>Acesso Restrito</title>
</head>



    <body>    
        <nav class='navbar navbar-expand navbar-dark' style='background-color: #2cc0b3;'><!--Define a cor do navbar de acordo com o perfil do usuário-->
        <a class="sidebar-toggle text-light mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>
        <a class="navbar-brand" href="#"><img src='./img/logo.png' width='30' height='30'></a>


        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <img class='rounded-circle' src='img/foto/foto.png' width='20' height='20'>&nbsp;<span class="d-none d-sm-inline">Márcio</span>
                    </a>                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink"><!--Dropdown que exibe o perfil e o sair-->
                        <a class="dropdown-item" href="adm_perfil.php"><i class="fas fa-user"></i> Perfil</a><!--ìcone do Perfil-->
                        <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i><!--ìcone do sair--> Sair</a>
                    </div>
                </li>
            </ul>                
        </div>
    </nav>

        <div class="d-flex">
            <nav class="sidebar">
            <ul class="list-unstyled">

            <li class=''><a href='index.php'><i class='fas fa-tachometer-alt'></i> Home</a></li>
            <li class=''><a href='adm_agenda.php'><i class='fas fa-clipboard-list'></i> Agenda</a></li>
            <li><a href='#submenu2' data-toggle='collapse'><i class='fas fa-search'></i> Pesquisar</a><ul id='submenu2' class='list-unstyled collapse'>
                <li class=''><a href='adm_prestadores.php'><i class='fas fa-users'></i> Prestador</a></li>
                <li class=''><a href='adm_busca.php'><i class='fas fa-location-arrow'></i> Localidade</a></li></ul></li>
            <li class=''><a href='adm_avaliar.php'><i class="fas fa-pencil-alt"></i> Avaliar</a>
            <li><a href='#submenu3' data-toggle='collapse'><i class='fas fa-user'></i> Informações do Usuário</a><ul id='submenu3' class='list-unstyled collapse'>
                <li class='active'><a href='adm_perfil.php'><i class='fas fa-user'></i> Visualizar Perfil</a></li></ul></li>   <li class=''><a href='logout.php'><i class='fas fa-sign-out-alt'></i> Sair</a></li>

            </ul>
    </nav>
                                                    
<div class="content p-1">
                <div class="list-group-item">
                    <div class="d-flex">
                        <div class="mr-auto p-2">
                            <h2 class="display-4 titulo">Editar Perfil</h2>
                        </div>
                        <div class="p-2">
                            <a href='adm_perfil.php' class='btn btn-outline-primary btn-sm'>Visualizar </a>
                        </div>
                    </div><hr>
                    
                    <form method="POST" action="adm_edit_perfil.php" enctype="multipart/form-data">  
                        
                        <div class="form-row"><!--Nome e Email-->
                            <div class="form-group col-md-6">
                                <label>                                
                                    <span class="text-danger">*</span> Nome Completo
                                </label>
                                <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome do usuário completo" value="Márcio Garcia">
                            </div>
                            <div class="form-group col-md-6">
                                <label><span class="text-danger">*</span> E-mail</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="O melhor e-mail do usuário" value="marciogarcia@hotmail.com">
                            </div>
                        </div><!--Nome e Email-->

                        <div class="form-row"><!--Tipo de Usuário-->
                            <div class="form-group col-md-3">
                                <label>                                
                                    <span class="text-danger">*</span> Tipo de Usuário
                                </label>
                                <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Nome de usuário para login" value="Paciente">
                            </div>
                            <div class="form-group col-md-3">
                                <label> Senha</label>
                                <input name="senha" type="password" class="form-control" id="senha" placeholder="A senha deve ter 6 caracteres" value="">
                            </div>
                            <div class="form-group col-md-3">
                                <label> Repetir Senha</label>
                                <input name="senha" type="password" class="form-control" id="repit_senha" placeholder="A senha deve ter 6 caracteres" value="">
                            </div>
                            <!-- Busca por CEP -->
                            <div class="form-group col-md-3">
                                <label>
                                <span class="text-danger">*</span> CEP</label>
                                <input name="senha" type="text" class="form-control" id="cep" placeholder="Insira o CEP" value="">
                            </div>
                                                        
                        </div><!--Tipo de usuário-->

                        <div class="form-row"><!--Endereço do Usuário-->
                            <div class="form-group col-md-1">
                                <label>
                                    <span class="text-danger">*</span> Tipo 
                                </label>
                                <input name="endere_rua" type="text" class="form-control" id="endere_rua" placeholder="Rua, Av..." value="Rua">        
                                    
                                </div>
                            <div class="form-group col-md-4">
                                <label>                                
                                    <span class="text-danger">*</span> Logradouro
                                </label>
                                <input name="endere_logradouro" type="text" class="form-control" id="endere_logradouro" placeholder="Nome do Logradouro" value="Santos Dumont">
                            </div>
                            <div class="form-group col-md-1">
                                <label>
                                    <span class="text-danger">*</span> Nº 
                                </label>
                                <input name="endere_numero" type="text" class="form-control" id="endere_numero" placeholder="Número" value="25">
                            </div>
                            <div class="form-group col-md-3">
                                <label>
                                    <span class="text-danger">*</span> Bairro 
                                </label>
                                <input name="endere_bairro" type="text" class="form-control" id="endere_bairro" placeholder="Bairro Onde Mora" value="Alto da Colina">
                            </div>                            
                            <div class="form-group col-md-3">
                                <label>
                                    <span class="text-danger">*</span> Cidade 
                                </label>
                                <input name="endere_bairro" type="text" class="form-control" id="endere_cidade" placeholder="Cidade Onde Mora" value="São Paulo">
                            </div>
                            
                        </div><!--Endereço do Usuário-->

                        <div class="form-row"><!--Telefone e Celular-->
                            
                            <div class="form-group col-md-2">
                                <label>
                                    <span class="text-danger">*</span> DDD 
                                </label>                                
                                <input name="ddd_cel" type="text" onkeypress="return onlynumber();" class="form-control" maxlength="2" id="ddd_cel" placeholder="Ex 19" value="19">        
                                    
                                </div>
                            <div class="form-group col-md-4">
                                <label>                                
                                    <span class="text-danger">*</span> Celular
                                </label>
                                <input name="celular" type="text" onkeypress="return onlynumber();" class="form-control" maxlength="9" id="celular" placeholder="Somente os Números (Sem Espaços)" value="991551555">
                            </div>
                            
                        </div><!--Telefone e Celular-->
                        
                        <div class="form-row"><!--Imagem-->
                            <input type="hidden" name="imagem_antiga" value="foto.png">
                            <div class="form-group col-md-6">
                                <label> Foto </label>
                                <input type="file" name="imagem" onchange="previewImagem();">
                            </div>  
                            <div class="form-group col-md-6">
                                                                <img src="img/foto/foto.png" id="preview-user" class="img-thumbnail" style="width: 150px; height: 150px;">
                            </div>                       
                        </div><!--Imagem-->

                        <p>
                            <span class="text-danger">* </span>Campo obrigatório
                        </p>
                        <input name="SendEditPerfil" type="submit" class="btn btn-warning" value="Salvar">
                    </form>
                </div>    
            </div>



                </div>
            </div>
            
<!--JS das páginas-->
   <script src="js/jquery-3.3.1.slim.min.js"></script><!--jquery das páginas-->
   <script src="js/popper.min.js"></script><!--Bootstrap 4-->
   <script src="js/bootstrap.js"></script><!--Bootstrap 4-->
   <script src="js/dashboard.js"></script><!--Comando que define a responsividade das tabelas e botões-->
   <script src="js/text_number.js"></script><!--Apenas permite que números sejam inseridos no formulário-->

   <script>
                function previewImagem() {
                    var imagem = document.querySelector('input[name=imagem').files[0];
                    var preview = document.querySelector('#preview-user');

                    var reader = new FileReader();

                    reader.onloadend = function () {
                        preview.src = reader.result;
                    }

                    if (imagem) {
                        reader.readAsDataURL(imagem);
                    } else {
                        preview.src = "";
                    }
                }
            </script> 
   
        </div>
    </body>
    </html>