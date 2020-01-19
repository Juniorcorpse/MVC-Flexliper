<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flexliper - Inteligência em TI</title>

    <!--Site feito por Livrodjx, usando PHP e Bootstrap :) -->

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="icon" type="imagem/png" href="assets/images/nova logo.PNG" />
 
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: white;">
        <div class="container" style="background-color: white;">
          <div class="navbar-header" style="background-color: white;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home" style="background-color: white">Flexliper</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="background-color: white;">
              <li><a href="/home">Home</a></li>
              <li><a href="/sobre">Sobre</a></li>
              <li><a href="/contato">Contato</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="box">
      <section class="banner" id="home">
        <div class="overlay"></div>
        <div class="container chamada-banner">
          <div class="row">

          </div><!--row-->
        </div>
      </section>
    </div>

    <section class="depoimento text-center ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>O que nós somos ?</h2>
              <blockquote>
                <p style="font-size: 17px;">Somos uma empresa de tecnologia, voltada para suporte técnico, desenvolvimento e projeto.</p>
              </blockquote>
            </div>
          </div>
        </div>
      </section>


      <section class="diferenciais text-center" id="sobre">
        <h2>Conheça nossa empresa</h2>
        <div class="container diferenciais-container">
          <div class="row">

            <div class="col-md-4">
              <h3><span class="glyphicon glyphicon-flash"></span></h3>
              <h2>Diferencial</h2>
              <p>Nós da Flexliper por meio de boas práticas de mercado, visamos antecipar e resolver problemas, garantindo a plena satisfação do cliente.</p>
            </div>

            <div class="col-md-4">
              <h3><span class="glyphicon glyphicon-star"></span></h3>
              <h2>Nossos Serviços :</h2>
              <p>Consultoria em informática e TI;<br>
                Serviços de backup local e online;<br>
                Chamados helpdesk ilimitados para usuários;<br>
                Visitas de manutenção corretiva ilimitadas;<br>
                Instalação e configuração CFTV;</p>
            </div>

            <div class="col-md-4">
              <h3><span class="glyphicon glyphicon-briefcase"></span></h3>
              <h2>Objetivo</h2>
              <p>Conhecer e entender nossos clientes suprindo suas necessidades pelo modo de relacionamento sólido e transparente, contribuindo para o desenvolvimento de empresas e pessoas.</p>
            </div>
          </div>
        </div>
      </section>
      
      <section>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="assets/images/flex2.png" style="width: 100%;" alt="Instalação de Monitores">
            </div>

            <div class="item">
              <img src="assets/images/flex3.jpg" style="width: 100%;" alt="Serviço CFTV">
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </section>
      
      <section class="final-site" id="contato">
        <div class="container">
          <div class="row">

            <div class="col-md-6">
              <h2>Fale Conosco</h2>

              <form method="POST" action="/email">
                <div class="form-group">
                  <label for="nome">Nome :</label>
                  <input type="text" name="nome" class="form-control" id="nome">
                </div>

                <div class="form-group">
                  <label for="email">Email :</label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                  <label for="nome">Mensagem :</label>
                  <textarea class="form-control" name="mensagem"></textarea>
                </div>

                <button type="submit" class="btn btn-default">Enviar</button>
              </form>
            </div>

            <div class="col-md-6">

              <div class="">
                <ul class="social-network social-circle">
                  <li><a href="https://www.facebook.com/flexliper/" target="_blank" rel=”noopener” class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  
                  <li><a href="https://www.instagram.com/flexliper/" target="_blank" rel=”noopener” class="icoInstagram" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                </ul>
              </div>

            </div>

          </div>
        </div>
      </section> 

      <footer>
        <p>Todos os direitos reservados</p>
      </footer>
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
