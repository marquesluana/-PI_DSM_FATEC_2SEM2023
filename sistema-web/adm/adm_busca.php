<?php
    require_once('adm_header.php');
    require_once('..\banco_dados.php');
    require_once('..\session.php');
    include 'dados_usuario.php';

    //para consultas no banco de dados
    //$db = new DBConnect();
    //$stmt = $db->select_veiculos();
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
                <li class='active'><a href='adm_busca.php'><i class='fas fa-location-arrow'></i> Localidade</a></li></ul></li>
            <li class=''><a href='adm_avaliar.php'><i class="fas fa-pencil-alt"></i> Avaliar</a>
            <li><a href='#submenu3' data-toggle='collapse'><i class='fas fa-user'></i> Informações do Usuário</a><ul id='submenu3' class='list-unstyled collapse'>
                <li class=''><a href='adm_perfil.php'><i class='fas fa-user'></i> Visualizar Perfil</a></li></ul></li>   <li class=''><a href='logout.php'><i class='fas fa-sign-out-alt'></i> Sair</a></li>

            </ul>
    </nav>
<div class="content p-1">
                <div class="list-group-item">
                    <div class="d-flex">
                        
                        <div class="mr-auto p-2">
                            <h2 class="display-4 titulo">Pesquisar Localidade</h2>
                        </div>
                        
                    </div><hr>                                                    


<!--Inicio da pesquisa--> 
<div class="content">
    <div class="flex">
     <div class="list-group-item">
        
  <form class="signin" method="POST" action="">       
      <img src='./img/favicon.png.png' width='120' height='93'>

            <div class="form-group col-md-6">
                <label>                                
                    <span class="text-danger">*</span> Busque por Prestadores de Serviços na sua Região
                </label>
                    <input name="locaidade" type="text" class="form-control" id="localidade" placeholder="Digite a Localidade" value="" required>
            </div>                           
                
            <div class="form-button">
                <input name="SendInsereLocalidade" type="submit" class="btn btn-primary" value="Buscar">
            </div>     
   </form>

     </div> 
   </div> 
 </div>                   
            
<!--JS das páginas-->
   <script src="js/jquery-3.3.1.slim.min.js"></script><!--jquery das páginas-->
   <script src="js/popper.min.js"></script><!--Bootstrap 4-->
   <script src="js/bootstrap.js"></script><!--Bootstrap 4-->
   <script src="js/dashboard.js"></script><!--Comando que define a responsividade das tabelas e botões-->
   <script src="js/text_number.js"></script><!--Apenas permite que números sejam inseridos no formulário-->

  
   </div></div>
    </div>
    </body>
    </html>