<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"/>
    <link rel="stylesheet"    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <link rel="stylesheet"    href="./css/style.css" />
    <link rel="shortcut icon" href="./img/favicon.png.png" type="image/x-icon" />
  </head>

  <title>Healthcare Connect Center</title>
  
  <body>
    <header>
      <nav class="fixed-top navbar navbar-expand-md navbar-dark mb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <h1 class="m-0">
              <img
                class="logo d-block"
                src="./assets/logo.png"
                alt="Logo HCC"
              />
            </h1>
          </a>
          
          <button
            class="navbar-toggler align-right"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">       
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-right">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sobre">Sobre nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#servicos">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#parceria">Seja nosso Parceiro</a>
              </li>
              <li>              
                <a class="btn btn-outline-light rounded-0" href="login.php" type="submit">Entrar</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>

<!--Carrousel-->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner"  style="margin-top: 4.75em;">
    <div class="carousel-item active">
      <picture>
                <source media="(max-width: 980px)" srcset="./assets/carousel/idoso1_pequena.jpg" alt="Primeiro Slide">
                <source media="(max-width: 1280px)" srcset="./assets/carousel/idoso1_media.jpg" alt="Primeiro Slide">
                <img class="d-block w-100" src="./assets/carousel/idoso1_grande.jpg" alt="Primeiro Slide">
      </picture>
      <div class="carousel-caption d-none d-md-block"></div>
    </div>
    
   <div class="carousel-item">
     <picture>
               <source media="(max-width: 980px)" srcset="./assets/carousel/idoso2_pequena.jpg" alt="Primeiro Slide">
               <source media="(max-width: 1280px)" srcset="./assets/carousel/idoso2_media.jpg" alt="Primeiro Slide">
               <img class="d-block w-100" src="./assets/carousel/idoso2_grande.jpg" alt="Primeiro Slide">
     </picture>      
     <div class="carousel-caption d-none d-md-block"></div>     
   </div>

    
  </div>
</div>

<!--Informações do projeto-->
    <section class="container-fluid content p-5">
      <article id="sobre" class="mb-5">
        <div class="card text-black bg-cinza ponto mb-5">
          <div class="card-header text-center">
            <h1 class="fs-1" style="color: #365659">Bem-vindo à <strong>Healthcare Connect Center</strong> a maior plataforma de Cuidador de Idoso e Pessoas com deficiência</h1>
          </div>
          <div class="card-body">
            <h5 class="card-title">Projeto Integrador Multidisciplinar</h5>
            <p class="card-text">
              Este projeto tem por objetivo o cumprimento do requisito acadêmico
              das disciplinas de Engenharia de Software II, Bando de Dados
              Relacionais e Desenvolvimento WEB II da
              <b>Faculdade de Tecnologia de Araras</b>
            </p>

            <h5 class="card-title">Objeto de estudo</h5>
            <p class="card-text">
              Observando atentamente o conjunto de Objetivos de Desenvolvimento
              Sustentável (ODS) no Brasil, dispostos pela conferência mundial da
              Organização das Nações Unidas (ONU), no que tange ao Objetivo nº
              3, que trata sobre Saúde e Bem-Estar, foi idealizado (nome do projeto...)
            </p>

            <h5 class="card-title">Objetivo social</h5>
            <p class="card-text">
              Na Healthcare Connect Center, oferecemos acesso aos melhores prestadores de serviço em todo o Brasil. 
                Crie sua conta agora e encontre o cuidador mais próximo de você.<br/>
                <img class="img-fluid img-fundo mt-3" style="margin-top: 26em" src="./assets/background/inicial.png" height="150" width="150"/>
            </p>
          </div>
        </div>
      </article>
   

    
      <article id="servicos" class="ponto">        
        <div class="bg-cinza painel ponto">
          <div class="cabecalho ponto" style="color: #000">
            <h2 class="fs-1 text-center">Serviços só pra você!!!</h2>
            <h3 class="fs-2 text-center">Confira os nossos atendimentos</h3>
          </div>
        </div>  
        /<!--<div class="row">-->
            <div class="col-3 bloco-texto">
                <img src="./img/casinha.png" />
                <h3><b>No conforto</b> da sua casa</h3>
                <p>Da sua residência, é possível agendar nossos serviços de cuidado de forma simples e rápida.
                </p>
            </div>
            <div class="col-3 bloco-texto" style="margin-top: 6em;">
                <img src="./img/mensagem.png" />
                <h3><b>Contate-os</b> de forma simples</h3>
                <p>Contate os cuidadores de idosos por meio do WhatsApp ou mensagens.
                </p>
            </div>
            <div class="col-3 bloco-texto">
                <img src="./img/saude.jpg" />
                <h3><b>Diversos</b> Prestadores de serviços</h3>
                <p>Tenha acesso a uma gama imensa de prestadores de serviços de todo o Brasil
                </p>
            </div>
          <!--</div>-->
        </article>
     
      

      <div class="col-100 bloco-imagens-texto">

      <article id="parceria" class="ponto">               
        <div class="bg-cinza painel ponto">
          <div class="cabecalho ponto" style="color: #000">
            <h1 class="fs-1 text-center">Seja Nosso parceiro!!!</h1>

                <a class="btn btn-cadastro" href="cadastro.php" type="submit">Cadastre-se</a>
              
            
          </div>
        </div> 
      </article>



        <div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/idosin1.jpg">
                <p><b>Prestador  </b>
                </p>
                <p><b>Com a gente você pode: </b>
                </p>
                <p>-Gerenciar sua agenda de atendimento.
                </p>
                <p>-Ter e gerar seus relatórios de consultas e visitas.</p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/idosin2.jpg">
                <p><b>Paciente  </b>
                </p>
                <p><b>Com a gente você pode: </b></p>
                <p>-Avaliar e ver avaliações dos prestadores. 
                </p>
                <p>-Agendar suas consultas no seu tempo</p>
            </div>
            
        </div>
            
        </div>
    </div>
    
        
    
  


      
          
       <div class="col-100 bloco-logos">
         <div class="content">
            <div class="col-4">
                <img alt="logo" title="logo" src="img/minsaude.png" />
            </div>
            <div class="col-4">
                <img alt="logo" title="logo" src="img/ararasss.png" />
            </div>
            <div class="col-4">
                <br />
                <img alt="logo" title="logo" src="img/fmusp.jpg" />
            </div>
            <div class="col-4">
                <img alt="Puma" title="Puma" src="img/lemee-removebg-preview.png" />
            </div>
        </div>
      </div>


        </div>
      </article>
    </section>

    <footer class="footer">
      
      <p class="fs-5 text-center">ADATECH Solutions © copyright 2023</p>
    </footer>

    <!-- Opção 1: Bootstrap Bundle com Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->

    <!-- Opção 2: Popper e Bootstrap JS separados -->

    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery-migrate.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    

    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/jquery-3.2.1.slim.min.js"></script>






  </body>
</html>
